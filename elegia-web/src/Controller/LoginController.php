<?php

namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController {
    public function index() {
        $this->layout = 'header';
        $this->set(compact('login'));
        $this->viewBuilder()->template('index');
    }

    public function auth(){
    	$this->loadModel('User');

    	if($this->request->is('post')){
    		$request_data = $this->request->getData();
    		$data = array(
    			'User' => array(
    				'email' =>  $request_data['user_email'],
    				'pwd_hash' => $request_data['user_password']
    			)
			);

			//TODO match data with user_data to check the passwords

			$this->Flash->success(__('Logged in as Mischa'));
			// redirect to start site and set the role
    	}else{
    		$this->Flash->error(__('Your request could not be checked'));
    	}


		return $this->redirect(['action' => 'index']);
    }
}
?>