<?php

namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController {

    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['auth', 'index']);
        $this->loadModel('User');
    }

    public function index() {
        $this->layout = 'header';
        $this->viewBuilder()->template('index');
        $this->set(compact($this->User));
    }

    public function auth(){
    	if($this->request->is('post')){

            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Username or password is incorrect'));
            }
    	}else{
    		$this->Flash->error(__('Your request could not be checked'));
    	}

		return $this->redirect(['action' => 'index']);
    }
}
?>