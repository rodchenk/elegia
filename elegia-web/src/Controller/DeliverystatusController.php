<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deliverystatus Controller
 *
 * @property \App\Model\Table\DeliverystatusTable $Deliverystatus
 *
 * @method \App\Model\Entity\Deliverystatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeliverystatusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $deliverystatus = $this->paginate($this->Deliverystatus);

        $this->set(compact('deliverystatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Deliverystatus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deliverystatus = $this->Deliverystatus->get($id, [
            'contain' => []
        ]);

        $this->set('deliverystatus', $deliverystatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deliverystatus = $this->Deliverystatus->newEntity();
        if ($this->request->is('post')) {
            $deliverystatus = $this->Deliverystatus->patchEntity($deliverystatus, $this->request->getData());
            if ($this->Deliverystatus->save($deliverystatus)) {
                $this->Flash->success(__('The deliverystatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deliverystatus could not be saved. Please, try again.'));
        }
        $this->set(compact('deliverystatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Deliverystatus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deliverystatus = $this->Deliverystatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deliverystatus = $this->Deliverystatus->patchEntity($deliverystatus, $this->request->getData());
            if ($this->Deliverystatus->save($deliverystatus)) {
                $this->Flash->success(__('The deliverystatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deliverystatus could not be saved. Please, try again.'));
        }
        $this->set(compact('deliverystatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Deliverystatus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deliverystatus = $this->Deliverystatus->get($id);
        if ($this->Deliverystatus->delete($deliverystatus)) {
            $this->Flash->success(__('The deliverystatus has been deleted.'));
        } else {
            $this->Flash->error(__('The deliverystatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
