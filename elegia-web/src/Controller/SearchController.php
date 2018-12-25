<?php

namespace App\Controller;

use App\Controller\AppController;

class SearchController extends AppController {

	public function initialize(){
        parent::initialize();
        $this->loadModel('User');
        $this->layout = 'header';
        //$this->Auth->allow(['search']);
    }

    public function isAuthorized($user){
    	return parent::isLoggedIn($user);
    }

    public function index() {
        $this->viewBuilder()->template('index');
    }

    public function search(){
        $this->viewBuilder()->template('index');
    }
}
?>