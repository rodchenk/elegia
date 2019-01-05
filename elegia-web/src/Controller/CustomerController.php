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

        //TODO
        $this->loadModel('Orders');
        $orders = $this->Orders->find('all', [
            'conditions' => [
                'customerID' => $id,
                'status' => 'not bought'
            ],
            'contain' => ['product']
        ]);
        $this->set('orders', $orders);
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

        $this->loadModel('Orders');
        $orders = $this->Orders->find('all',[
            'conditions' => [
                'status !=' => 'not bought',
                'customerID' => $id
            ],
            'contain' => 'product'
        ]);

        $this->set('orders', $orders);
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
     * @author mischa
     * @param string|null $id Customer id.
     * @return void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null){
        $this->loadModel('Geo');
        $customer = $this->Customer->get($id, ['contain' => 'User']);

        if(isset($customer->city))
            $plz = $this->Geo->find('all', 
                ['conditions' => [
                    'city LIKE' => '%'.$customer->city.'%'
                ],
                'fields' => 'zip'
            ])->first(); /* TODO -> Adresse Machanismus komplett umbauen */

        $this->viewBuilder()->setTemplate('customer');   
        $this->set('customer', $customer);     
        $this->set('plz', $plz);
    }

    /**
     * @author mischa
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customer->get($id, [
            'contain' => ['User']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            if(!empty($this->request->getData('image'))){
               
                $file = $this->request->getData('image');
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1);

                if (in_array($ext, ['jpg', 'jpeg', 'gif','png'])) {
                    $file_name = hash('ripemd160', $file['name']).'.'.$ext;
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/upload/u/'.$file_name);
                    $data['image'] = $file_name;
                }else{
                    $this->Flash->error(__('It seems not to be an image. Please, try again.'));
                }
            }

            $customer = $this->Customer->patchEntity($customer, $data);
            if ($this->Customer->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'edit', $id]);
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
