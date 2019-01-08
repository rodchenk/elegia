<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 *
 * Elegia (-web), Lieferservice
 * @author mischa
 * @license https://github.com/rodchenk/elegia/blob/master/LICENSE
 * @since 1.0
 *
 */
class SupplierController extends AppController{

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('header');
        $this->Auth->allow(['view']);
    }

    /**
     * @author mischa
     * @param $user -> der aktuell angemeldete Benutzer
     * @property steuert die Zugriffsrechte
     * @return boolean true (when erlaubt), false (when verboten)
     */
    public function isAuthorized($user){
        if (in_array($this->request->getParam('action'), ['edit', 'orders', 'notification'])) {
            return (int)$this->request->getParam('pass.0') === $user['userID'];
        }

        return parent::isAuthorized($user);
    }
    // /**
    //  * @property unused 
    //  * @return \Cake\Http\Response|void
    //  */
    // public function index(){
    //     $supplier = $this->paginate($this->Supplier);
    //     $this->set(compact('supplier'));
    // }

    /**
     * @author mischa
     * @param string|null $id Supplier id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null){
        $waiting = 'waiting';
        $supplier = $this->Supplier->get($id, [
            'contain' => []
        ]);
        $this->ViewBuilder()->setTemplate('supplier');
        $this->loadModel('Orders');
        $this->loadModel('Product');
        $products = $this->Product->find('all', [
            'conditions' => [
                'supplierID' => $id
            ]
        ]);

        $this->set('orders', $this->Orders->newEntity());
        $this->set('products', $products);
        $this->set('supplier', $supplier);
    }

    public function notification($id = null){
        $supplier = $this->Supplier->get($id, [
            'contain' => []
        ]);

        $this->loadModel('Orders');

        $notifications = $this->Orders->find('all',[
            'conditions' => [
                'Product.supplierID' => $id,
                'Orders.status' => 'waiting'], 
            'contain' => [
                'Product', 
                'Customer']
        ]);

        $this->set('supplier', $supplier);
        $this->set('notifications', $this->paginate($notifications));
        $this->viewBuilder()->setTemplate('notification');
    }

    public function orders($id = null){
        $supplier = $this->Supplier->get($id, [
            'contain' => []
        ]);

        $this->loadModel('Orders');

        $orders = $this->Orders->find('all',[
            'conditions' => [
                'Product.supplierID' => $id,
                'Orders.status !=' => 'waiting'], 
            'contain' => [
                'Product', 
                'Customer'],
            'order' => 'updated DESC'
        ]);

        $this->paginate = ['limit' => 5];

        $this->set('supplier', $supplier);
        $this->set('orders', $this->paginate($orders));
        $this->viewBuilder()->setTemplate('orders');
    }

    /**
     * @author
     * @param string|null $id Supplier id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null){
        $supplier = $this->Supplier->get($id, [
            'contain' => ['user']
        ]);
        $img = $supplier['image'];
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            //$data['image'] = $supplier->image;

            if(file_exists($_FILES['image']['tmp_name'])){
                $file = $data['image'];
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1);

                if (in_array($ext, ['jpg', 'jpeg', 'gif','png'])) {
                    $file_name = hash('ripemd160', $file['name']).'.'.$ext;
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/upload/s/'.$file_name);
                    $img = $file_name;
                }else{
                    $this->Flash->error(__('It seems not to be an image. Please, try again.'));
                }
            }
            $supplier = $this->Supplier->patchEntity($supplier, $data);

            $supplier->image = $img;
            $supplier['description'] = $data['description'];

            if ($this->Supplier->save($supplier)) {
                $this->Flash->success(__('The supplier has been saved.'));

                return $this->redirect(['action' => 'edit', $id]);
            }
            $this->Flash->error(__('The supplier could not be saved. Please, try again.'));
        }
        $this->set(compact('supplier'));
    }
}
