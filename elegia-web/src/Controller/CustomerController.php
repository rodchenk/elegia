<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Elegia (-web), Lieferservice
 * @author mischa
 * @license https://github.com/rodchenk/elegia/blob/master/LICENSE
 * @since 1.0
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerController extends AppController{

    /**
     * @author mischa
     * @property wird beim aufruf User Maske ausgefuehrt. Jeder Nutzer darf ausloggen und index seite anschaeun
     */
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('header');
        $this->Auth->allow(['index', 'view']);

        
    }

    /**
     * @author mischa
     * @param $user -> der aktuell angemeldete Benutzer
     * @property steuert die Zugriffsrechte (nur der Besitzer kann die Cart/Edit/History Actions ausführen) 
     * @return boolean true (when erlaubt), false (when verboten)
     */
    public function isAuthorized($user){
        if (in_array($this->request->getParam('action'), ['cart', 'edit', 'history'])) {
            return (int)$this->request->getParam('pass.0') === $user['userID'];
        }

        if($this->request->getParam('action') == 'index'){
            return parent::isLoggedIn($user);
        }

        return false;
    }   

    /**
     * @author mischa
     * @property Warenkorb
     * @param $id von user, dessen Warenkorb angeschaut wird
     * @return \Cake\Http\Response|void
     */
    public function cart($id = null){
        $customer = $this->Customer->get($id, [
            'contain' => []
        ]);
        $this->viewBuilder()->setTemplate('cart');
        $this->set('customer', $customer);
    }

    /**
     * @author mischa
     * @property Warenkorb
     * @param $id von user, dessen Warenkorb angeschaut wird
     * @return \Cake\Http\Response|void
     */
    public function history($id = null){
        $customer = $this->Customer->get($id, [
            'contain' => []
        ]);
        $this->viewBuilder()->setTemplate('history');
        $this->set('customer', $customer);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index(){
        $customer = $this->paginate($this->Customer);
        $this->set(compact('customer'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null){
        $customer = $this->Customer->get($id, [
            'contain' => []
        ]);
        $this->viewBuilder()->setTemplate('customer');   
        $this->set('customer', $customer);     
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customer->patchEntity($customer, $this->request->getData());
            if ($this->Customer->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $this->set(compact('customer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customer->get($id);
        if ($this->Customer->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
