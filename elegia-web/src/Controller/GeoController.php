<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Geo Controller
 *
 * @property \App\Model\Table\GeoTable $Geo
 *
 * @method \App\Model\Entity\Geo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $geo = $this->paginate($this->Geo);

        $this->set(compact('geo'));
    }

    /**
     * View method
     *
     * @param string|null $id Geo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geo = $this->Geo->get($id, [
            'contain' => []
        ]);

        $this->set('geo', $geo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geo = $this->Geo->newEntity();
        if ($this->request->is('post')) {
            $geo = $this->Geo->patchEntity($geo, $this->request->getData());
            if ($this->Geo->save($geo)) {
                $this->Flash->success(__('The geo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geo could not be saved. Please, try again.'));
        }
        $this->set(compact('geo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Geo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geo = $this->Geo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geo = $this->Geo->patchEntity($geo, $this->request->getData());
            if ($this->Geo->save($geo)) {
                $this->Flash->success(__('The geo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geo could not be saved. Please, try again.'));
        }
        $this->set(compact('geo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Geo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geo = $this->Geo->get($id);
        if ($this->Geo->delete($geo)) {
            $this->Flash->success(__('The geo has been deleted.'));
        } else {
            $this->Flash->error(__('The geo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
