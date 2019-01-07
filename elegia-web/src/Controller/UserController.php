<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

/**
 * Elegia (-web), Lieferservice
 * @author mischa
 * @license https://github.com/rodchenk/elegia/blob/master/LICENSE
 * @since 1.0
 */
class UserController extends AppController{

    /**
     * @author mischa
     * @property wird beim aufruf User Maske ausgefuehrt. Jeder Nutzer darf ausloggen und index seite anschaeun
     */
    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['index', 'logout', 'language']);
    }


    public function language($language = null){
        //I18n::setLocale($language); 
        $_SESSION['language'] = $language;
        return $this->redirect($this->referer());        
    }

    /**
     * @author mischa
     * @property Hier werden die Rechte ueberprueft, ob der User fuer das ausgefuehrte Action authorized ist
     * @return boolean true if authorized, false if not
     */
    public function isAuthorized($user){
        if ($this->request->getParam('action') === 'add') {//TODO
            return true;
        }

        if (in_array($this->request->getParam('action'), ['edit', 'delete', 'view'])) {
            return (int)$this->request->getParam('pass.0') === $user['userID'];
        }

        return parent::isAuthorized($user);
    }

    public function index(){
        $user = $this->paginate($this->User);
        $this->set(compact('user'));
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }


    public function view($id = null){
        $user = $this->User->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    public function add(){
        $user = $this->User->newEntity();
        if ($this->request->is('post')) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id = null){
        $user = $this->User->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->User->get($id);
        if ($this->User->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
