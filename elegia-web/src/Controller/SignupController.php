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

    		if(array_key_exists('user_role', $request_data)){
    			//when das Checkbox angekreuzt ist oder, wird der Lieferant ausgewaehlt
    			$role = $request_data['user_role'] ? 'supplier' : 'customer';
    		}else{
    			//when nicht angefasst, dann customer
    			$role = 'customer';
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
				/*--NOT CHECKED--*/
				/*if($role == 'supplier'){
	    			$this->loadModel('Supplier');
	    			$supplier = $this->Supplier->newEntity();
	    			$supplier_data = array(
	    				'Supplier' => array(
	    					'id' => $this->User->id,
	    					'name' => $request_data['user_name'],
	    					'city' => $request_data['user_city']
	    				)
	    			);

	    			$supplier = $this->Supplier->patchEntity($supplier, $supplier_data);
	    			$this->Supplier->save($supplier);

	    		}elseif($role == 'customer'){
	    			$this->loadModel('Customer');
	    			$customer = $this->Supplier->newEntity();
	    			$customer_data = array(
	    				'Customer' => array(
	    					'id' => $this->User->id,
	    					'name' => $request_data['user_name'],
	    					'city' => $request_data['user_city']
	    				)
	    			);

	    			$customer = $this->Customer->patchEntity($customer, $customer_data);
	    			$this->Customer->save($customer);
	    		}*/
	    		/*----*/
				$this->Flash->success(__('The user has been saved'));
			}else{
				$this->Flash->error(__('The user could not be saved. Please, try again '.$role));
			}
    	}
    	return $this->redirect(['action' => 'index']);
    }

}
?>