<?php

namespace App\Controller;

use App\Controller\AppController;

class SignupController extends AppController {

    public function index() {
        $this->viewBuilder()->layout('header');
        $this->set(compact('user'));
        $this->viewBuilder()->template('index');
    }

    /*
	* TODO refactoring
    */
    public function add(){
    	$this->loadModel('User');
    	$user = $this->User->newEntity();

    	if($this->request->is('post')){
    		$request_data = $this->request->getData();

    		$pwd = $request_data['user_password'];

    		if($request_data['user_password'] != $request_data['user_password_repeat']){
    			$this->Flash->error(__('The passwords doesnt match. Please, try again'));
    			return $this->redirect(['action' => 'index']);
    		}

    		if(!empty($request_data['user_role'])){
    			$role = $request_data['user_role'] == true ? 'supplier' : 'customer'; //when das Checkbox angekreuzt ist, wird der Lieferant ausgewaehlt
    		}else{
    			$this->Flash->error(__('You have to choose a role. Please, try again'));
    			return $this->redirect(['action' => 'index']);
    		}

    		$data = array(
    			'User' => array(
	        		'email' => $request_data['user_email'],
	        		'pwd_hash' => $request_data['user_password'],
	        		'role' => $role
    			)
			);

			$user = $this->User->patchEntity($user, $data);

			if ($this->User->save($user)){
				$this->Flash->success(__('The user has been saved'));
			}else{
				$this->Flash->error(__('The user could not be saved. Please, try again'));
			}
    	}
    	return $this->redirect(['action' => 'index']);
    }

}
?>