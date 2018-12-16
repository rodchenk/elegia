<?php

namespace App\Controller;

use App\Controller\AppController;

class SignupController extends AppController {

    public function index() {
        $this->viewBuilder()->layout('header');
        $this->set(compact('user'));
        $this->viewBuilder()->template('index');
    }

    public function add(){
    	$this->loadModel('User');
    	$user = $this->User->newEntity();

    	if($this->request->is('post')){
    		$request_data = $this->request->getData();

    		$data = array(
    			'User' => array(
	        		'email' => $request_data['user_email'],
	        		'pwd_hash' => $request_data['user_password'],
	        		'role' => 'admin'
    			)
			);
			$user = $this->User->patchEntity($user, $data);

			if ($this->User->save($user)){
				$this->Flash->success(__('The user has been saved'));
			}else{
				$this->Flash->error(__('Something went wrong'));
			}
    	}
    	return $this->redirect(['action' => 'index']);
    }

}
?>