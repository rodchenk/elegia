<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Product Controller
 *
 * @property \App\Model\Table\ProductTable $Product
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductController extends AppController{

    public function initialize(){
        parent::initialize();
        $this->layout = 'header';
        $this->Auth->allow(['index', 'overview', 'add']); /* TODO*/
    }

    public function overview($id = null){
        $this->paginate = ['limit' => 5];
        $products = $this->paginate(
            $this->Product->find('all', [
                'condition' => ['supplierID' => $id],
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
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $product = $this->paginate($this->Product);

        $this->set(compact('product'));
    }

    /**
     * View method
     *
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
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
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
    public function edit($id = null)
    {
        $product = $this->Product->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Product->patchEntity($product, $this->request->getData());
            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Product->get($id);
        if ($this->Product->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
