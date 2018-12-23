<?php

namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController {

    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['auth', 'index']);

    }

    public function index() {
        $this->layout = 'header';
        $this->set(compact('login'));
        $this->viewBuilder()->template('index');
    }

    public function auth(){
    	$this->loadModel('User');

    	if($this->request->is('post')){
   //  		$request_data = $this->request->getData();
   //  		$data = array(
   //  			'User' => array(
   //  				'email' =>  $request_data['user_email'],
   //  				'pwd_hash' => $request_data['user_password']
   //  			)
			// );

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