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

    private $ANONYM =  'role_0'; /*not logged in*/
    private $CUTOMER = 'role_1'; /*logged in as customer*/
    private $SUPPLIER ='role_2'; /*logged in as supplier*/
    private $ADMIN =   'role_3'; /*logged in as admin*/


    public function initialize(){

        parent::initialize();

        $this->set('role', 'role_0');

        $this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false]);
        $this->loadComponent('Flash');
        $this->loadComponent('Security');
        $this->loadComponent('Auth', [
            'Authenticate' => [
                'Form' => [
                    'finder' => 'auth',
                    'passwordHasher' => 'Default',
                    'userModel' => 'User',
                    'Fields'    => ['username' => 'email','password' => 'pwd_hash'],
                ]
            ],
            'authError'     => ':)',
            'storage'       => 'Session',
            'loginAction'       => ['controller' => 'Login','action' => 'index'],
            'loginRedirect'     => ['controller' => 'Start','action' => 'index'],
            'logoutRedirect'    => ['controller' => 'Start','action' => 'index']
        ]);

    }
}
