<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController{


     /**
     * @author mischa
     * @property wird beim aufruf User Maske ausgefuehrt. Jeder Nutzer darf ausloggen und index seite anschaeun
     */
    public function initialize(){
        parent::initialize();
        //$this->viewBuilder()->setLayout('header');
        //$this->Auth->allow();

        
    }

    /**
     * @author mischa
     * @param $user -> der aktuell angemeldete Benutzer
     * @property steuert die Zugriffsrechte (nur der Besitzer kann die Cart/Edit/History Actions ausführen) 
     * @return boolean true (when erlaubt), false (when verboten)
     */
    public function isAuthorized($user){
        if ($this->request->getParam('action') == 'add') {
            return $user['role'] == 'customer';
        }

        if($this->request->getParam('action') == 'delete'){
            return $user['userID'] == $this->request->getParam('1');
        }

        if($this->request->getParam('action') == 'buy'){
            return $user['userID'] == $this->request->getParam('0');
        }

        return parent::isAuthorized;
    }

    /**
     * View method
     * unused
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null){
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);

        $this->set('order', $order);
    }

    public function changestatus($userID = null, $orderID = null, $status = 'in progress'){
        $order = $this->Orders->get($orderID);

        if($status === 'delivering'){ /* minus amount from stock when delivering */
            $amount = $order->amount;

            $this->loadModel('Product');
            $product = $this->Product->get($order->productID);

            if($product->stock - $amount < 0){
                $this->Flash->error('No enough products in the Stock');
                return $this->redirect($this->referer());
            }

            $product->stock -= $amount;
            $this->Product->save($product);
        }

        $order->status = $status;
        $order->updated = date('Y-m-d H:i:s');
        
        if($this->Orders->save($order)){
            $this->Flash->success(__('The status has been changedd.'));
        }else{
            $this->Flash->error(__('The status could not be changed. Please, try again.'));
        }

        return $this->redirect(['controller' => 'supplier', 'action' => 'orders', $userID]);
    }

    /**
     *
     *
     *
     */
    public function buy($customerID = null){
        $this->Orders->updateAll(
            ['status' => 'waiting',     'updated' => date('Y-m-d H:i:s')],
            ['status' => 'not bought',  'customerID' => $customerID]);

        return $this->redirect(['controller' => 'customer', 'action' => 'cart', $customerID]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($cutomerID, $productID, $supplierID){
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['productID'] = $productID;
            $data['customerID'] = $cutomerID;

            $order = $this->Orders->patchEntity($order, $data);

            $order['productID'] = $productID;
            $order['customerID'] = $cutomerID;

            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['controller' => 'supplier', 'action' => 'view', $supplierID]);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
            return $this->redirect(['controller' => 'supplier', 'action' => 'view', $supplierID]);
        }
        $this->set(compact('order'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null, $customerID = null){

        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'customer', 'action' => 'cart', $customerID]);
    }
}
