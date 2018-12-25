<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Elegia (-web), Lieferservice
 * @author mischa
 * @license https://github.com/rodchenk/elegia/blob/master/LICENSE
 * @since 1.0
 */

class LoginController extends AppController {

    public function initialize(){
        parent::initialize();
        $this->loadModel('User');
        $this->layout = 'header';
        $this->Auth->allow(['index', 'login']);
    }

    public function index() {
        $this->viewBuilder()->template('index');
        $this->set(compact($this->User));
    }

    public function login(){
    	if($this->request->is('post')){
            $user = $this->identify();
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

    /**
     * @author mischa
     * @since 1.0 (Dezember 2018)
     * @property alternative methode zu Auth->identify(), da ich diese Methode nicht hingekriegt habe
     * @return false when der User nicht anerkannt wurde oder array von Users Daten
     */
    private function identify(){
      $password =   $this->request->getData('password');
      $email =      $this->request->getData('email');

      $user = $this->User->find('all', ['conditions' => ['email'=> $email]])->first();
      if($user){
        return password_verify($password, $user->password) ? $user : false;
      }
      return false;
    }
}
?>
