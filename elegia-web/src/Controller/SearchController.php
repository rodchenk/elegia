<?php

namespace App\Controller;

use App\Controller\AppController;

class SearchController extends AppController {

	public function initialize(){
        parent::initialize();
        $this->loadModel('Supplier');
        $this->viewBuilder()->setLayout('header');
        $this->viewBuilder()->template('index');
        //$this->Auth->allow(['search']);
    }

    public function isAuthorized($user){
    	return parent::isLoggedIn($user);
    }

    public function index() {
    	$kriteria = $this->request->getQuery('q');
    	$this->paginate = ['limit' => 5];
    	$query =$kriteria ? 
    			$this->Supplier->find('all', ['conditions' => ['city' => $kriteria]]) : 
    			$this->Supplier->find('all');
    	$supplier = $this->paginate($query);
        $this->set(compact('supplier'));
    }
}
?>