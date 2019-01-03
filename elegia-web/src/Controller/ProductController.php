<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Elegia (-web), Lieferservice
 * @author mischa
 * @license https://github.com/rodchenk/elegia/blob/master/LICENSE
 * @since 1.0
 */
class ProductController extends AppController{

    public function initialize(){
        parent::initialize();
        $this->layout = 'header';
    }

    /**
     * @author mischa
     * @param $user -> der aktuell angemeldete Benutzer
     * @property steuert die Zugriffsrechte (nur der Besitzer kann die Cart/Edit/History Actions ausführen) 
     * @return boolean true (when erlaubt), false (when verboten)
     */
    public function isAuthorized($user){//TODO
        if (in_array($this->request->getParam('action'), ['overview', 'add', 'delete', 'edit'])) {
            return (int)$this->request->getParam('pass.0') === $user['userID'];
        }

        return parent::isAuthorized($user);
    }

    /**
     * @author mischa
     * @param $id of supplier to check his authorization 
     * @return a template with products and supplier info
     * @throws nothing 
     */
    public function overview($id = null){
        $this->paginate = ['limit' => 5];
        $products = $this->paginate(
            $this->Product->find('all', [
                'conditions' => ['supplierID' => $id],
                'contain' => ['category']
            ]), ['limit' => 5]
        );

        $this->loadModel('Supplier');
        $supplier = $this->Supplier->get($id, [
            'contain' => []
        ]);
        $this->set('supplier', $supplier);

        $this->set(compact('products'));
        $this->viewBuilder()->setTemplate('overview');
    }

    /**
     * @property UNUSED
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $product = $this->paginate($this->Product);

        $this->set(compact('product'));
    }

    /**
     * @property UNUSED
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null){
        $product = $this->Product->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
    }

    /**
     * @author mischa
     * @param $id of supplier to check authorization
     * @return Redirects on successful add, renders view otherwise.
     */
    public function add($id = null){
        $this->loadModel('Supplier');
        $supplier = $this->Supplier->get($id, [
            'contain' => []
        ]);
        $this->set('supplier', $supplier);

        $product = $this->Product->newEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            /*catch an image start -> TODO make a service, its used also in CustomerController and SupplierController*/
            if(!empty($data['image'])){
               
                $file = $data['image'];
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1);

                if (in_array($ext, ['jpg', 'jpeg', 'gif','png'])) {
                    $file_name = hash('ripemd160', $file['name']).'.'.$ext;
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/upload/p/'.$file_name);
                    $data['image'] = $file_name;
                }else{
                    $this->Flash->error(__('It seems not to be an image. Please, try again.'));
                }
            }
            /* image end*/
            $data['supplierID'] = $id;
            $product = $this->Product->patchEntity($product, $data);
            $product->categoryID = $data['categoryID'];

            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'add', $id]);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
        $this->loadModel('Category');
        $category = $this->Category->find('list');
        $this->set('category',$category);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($supplierID = null, $id = null){
        $product = $this->Product->get($id, [
            'contain' => ['Category']
        ]);
        $data = $this->request->getData();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Product->patchEntity($product, $data);

            $product->categoryID = $data['category'];

            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'overview', $supplierID]);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }

        $this->loadModel('Category');
        $category = $this->Category->find('list');
        $this->set(compact('product'));
        $this->set('category',$category);
    }

    /**
     * @author mischa
     * @param $supplierID -> id of supplier to check authorization and id of product that should be deleted
     * @return Redirects to overview.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($supplierID = null, $id = null){
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Product->get($id);
        if ($this->Product->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'overview', $supplierID]);
    }
}
