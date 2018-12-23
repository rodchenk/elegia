<?php

namespace App\Controller;

use App\Controller\AppController;

class StartController extends AppController {

    public function index() {    
        $this->layout = 'header';
        $this->viewBuilder()->template('index');
    }

    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->Auth->allow(['search', 'index']);
    }

    public function search(){
        $this->request->allowMethod('ajax');
        $keyword = $this->request->query('keyword');
        $this->loadModel('Geo');
        $this->paginate = ['limit' => 5];
        if(is_numeric($keyword)){
        	$query = $this->Geo->find('all', [
	            'conditions' => 
	                ['CAST(Geo.zip as CHAR) LIKE' => '%'.$keyword.'%'], 
	            'group' => 'Geo.city'
	        ]);
        }else{
	        $query = $this->Geo->find('all', [
	            'conditions' => 
	                ['Geo.city LIKE' => ''.$keyword.'%'], 
	            'group' => 'Geo.city'
	        ]);
        }
        $this->RequestHandler->prefers('json');
        $cities = $this->paginate($query);
        foreach ($cities as $city) {
            echo '<option value="'.$city->city.', '.$city->bundesland.', '.$city->zip.'"></option>';
        }

        $this->render(false);
    }
}

?>