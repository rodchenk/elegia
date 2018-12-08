<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Basket Controller
 *
 * @property \App\Model\Table\BasketTable $Basket
 *
 * @method \App\Model\Entity\Basket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BasketController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $basket = $this->paginate($this->Basket);

        $this->set(compact('basket'));
    }

    /**
     * View method
     *
     * @param string|null $id Basket id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $basket = $this->Basket->get($id, [
            'contain' => []
        ]);

        $this->set('basket', $basket);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $basket = $this->Basket->newEntity();
        if ($this->request->is('post')) {
            $basket = $this->Basket->patchEntity($basket, $this->request->getData());
            if ($this->Basket->save($basket)) {
                $this->Flash->success(__('The basket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The basket could not be saved. Please, try again.'));
        }
        $this->set(compact('basket'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Basket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $basket = $this->Basket->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $basket = $this->Basket->patchEntity($basket, $this->request->getData());
            if ($this->Basket->save($basket)) {
                $this->Flash->success(__('The basket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The basket could not be saved. Please, try again.'));
        }
        $this->set(compact('basket'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Basket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $basket = $this->Basket->get($id);
        if ($this->Basket->delete($basket)) {
            $this->Flash->success(__('The basket has been deleted.'));
        } else {
            $this->Flash->error(__('The basket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
