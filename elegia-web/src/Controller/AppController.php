<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller{

    /**
     * @author mischa
     * @property obere methode für das Prüfen von Rechten. Admin darf alle Actions machen
     * @return true if admin, else false
     */
    public function isAuthorized($user){
        if (isset($user->role) && $user->role === 'admin') {
            return true;
        }
        return false;
    }

    /**
     * @author mischa
     * @property die alternative Methode zu initialize() ?
     */
    function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    /**
     * @author mischa
     * @property initialisiert alle masken, hier werden Komponente geladen und ggf. konfiguriert
     */
    public function initialize(){
        parent::initialize();
        $this->loadComponents();

        $this->Auth->allow('setLanguage');
        
        $user = $this->Auth->User();

        if(empty($user)){
            $this->loadModel('User');
            $user = $this->User->newEntity();
            $user->role = 'anonym';
        }else{
            $this->loadModel('Orders');

            if($user['role'] === 'customer'){
                $notification = $this->Orders->find('all', [
                    'conditions' => [
                        'customerID' => $user['userID'],
                        'status' => 'not bought'
                    ]
                ])->count();

            }elseif($user['role'] === 'supplier'){
                $notification = $this->Orders->find('all', [
                    'conditions' => [
                        'Product.supplierID' => $user['userID'],
                        'status' => 'waiting'
                    ],
                    'contain' => 'Product'
                ])->count();

            }else{
                $notification = 0;//TODO for admin
            }

            $this->set('notification', $notification);
        }

        $this->set('user', $user);
    }

    /**
     * @author mischa
     * @property method is used in child classes in isAuthorized
     * @return if user is logged in
     */
    public function isLoggedIn($user){
        return isset($user->userID);
    }

    public function loadComponents(){
        $this->loadComponent('Auth', [
            'Authenticate'  => [
                'Form'      => [
                    'passwordHasher' => 'Default',
                    'userModel' => 'User',
                    'Fields'    => ['username' => 'email', 
                                    'password' => 'password']
                ]
            ],
            'authError'         => 'You do not have enough permission for this action',
            'loginAction'       => ['controller' => 'Login','action' => 'index'],
            'logoutRedirect'    => ['controller' => 'Start','action' => 'index'],
            'authorize'         => ['Controller']
        ]);

        $this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false]);
        $this->loadComponent('Flash');
        //$this->loadComponent('Security');
    }

    public function setLanguage($language = null){
        //$this->session()->write('Config.Language', 'en_EN');
        //TODO
        return $this->redirect($this->referer());
    }
}
