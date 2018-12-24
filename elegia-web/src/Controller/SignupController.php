<?php

namespace App\Controller;

use App\Controller\AppController;

class SignupController extends AppController {

    var $components = array("RequestHandler");

    public function initialize(){
        parent::initialize();
        //$this->loadComponent('RequestHandler');
        $this->Auth->allow(['search', 'index', 'add']);
    }

    public function isAuthorized($user){
        return true;
    }


    public function search(){
        $this->request->allowMethod('ajax');
        $keyword = $this->request->query('keyword');
        $this->loadModel('Geo');
        $this->paginate = ['limit' => 5];

        $query = $this->Geo->find('all', [
            'conditions' =>
                ['Geo.city LIKE' => ''.$keyword.'%'],
            'group' => 'Geo.city'
        ]);

        $this->RequestHandler->prefers('json');
        $cities = $this->paginate($query);
        foreach ($cities as $city) {
            echo '<option value="'.$city->city.', '.$city->bundesland.'"></option>';
        }

        $this->render(false);
    }

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

    		//$pwd = $request_data['user_password'];

            //if the password does not match to the repeated password
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

            if(array_key_exists('user_city', $request_data)){
                $cities = explode(", ", $request_data['user_city']);//array of input field with city (and bundesland?) 'Berlin, Berlin' -> ['Berlin', 'Berlin'] ->pop = ['Berlin'] -> impolde Berlin
                if(sizeof($cities) >= 2){
                    //$bundesland = $cities[sizeof($cities)-1];
                    array_pop($cities);//remove last element from array (it should be the bundesland)
                    $city = implode(", ", $cities);//array to string
                }else{
                    $city = $cities[0];
                }
            }else{
                $this->Flash->error(__('Please fill all required fields'));
                return $this->redirect(['action' => 'index']);
            }

    		$data = array(
    			'User' => array(
	        		'email' => $request_data['user_email'],
	        		'password' => $request_data['user_password'],
	        		'role' => $role
    			)
			);

			$user = $this->User->patchEntity($user, $data);
      $saved_user = $this->User->save($user);

			if ($saved_user){
                $id = $saved_user->userID;

				/*--NOT CHECKED--*/
				if($role == 'supplier'){
	    			$this->loadModel('Supplier');
	    			$supplier = $this->Supplier->newEntity();
	    			$supplier_data = array(
	    				'Supplier' => array(
	    					'supplierID' =>   $id,
	    					'name' =>         $request_data['user_name'],
	    					'city' =>         $city
	    				)
	    			);

	    			$supplier = $this->Supplier->patchEntity($supplier, $supplier_data);

                    if($this->Supplier->save($supplier)){
                        $this->Flash->success(__('The user has been saved'));
                    }else{
                        $this->Flash->error(__('The user could not be saved. Please, try again '));
                    }

	    		}elseif($role == 'customer'){
	    			$this->loadModel('Customer');
	    			$customer = $this->Customer->newEntity();
	    			$customer_data = array(
	    				'Customer' => array(
	    					'customerID' =>   $id,
	    					'name' =>         $request_data['user_name'],
	    					'city' =>         $city
	    				)
	    			);

	    			$customer = $this->Customer->patchEntity($customer, $customer_data);
	    			if($this->Customer->save($customer)){
                        $this->Flash->success(__('The user has been saved'));
                    }else{
                        $this->Flash->error(__('The user could not be saved. Please, try again '));
                    }
	    		}
	    		/*----*/
				$this->Flash->success(__('The user has been saved'));
			}else{
				$this->Flash->error(__('The user could not be saved. Please, try again '));
			}
    	}
    	return $this->redirect(['action' => 'index']);
    }

}
?>
