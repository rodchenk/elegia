<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paymentmethod Controller
 *
 * @property \App\Model\Table\PaymentmethodTable $Paymentmethod
 *
 * @method \App\Model\Entity\Paymentmethod[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentmethodController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $paymentmethod = $this->paginate($this->Paymentmethod);

        $this->set(compact('paymentmethod'));
    }

    /**
     * View method
     *
     * @param string|null $id Paymentmethod id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentmethod = $this->Paymentmethod->get($id, [
            'contain' => []
        ]);

        $this->set('paymentmethod', $paymentmethod);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentmethod = $this->Paymentmethod->newEntity();
        if ($this->request->is('post')) {
            $paymentmethod = $this->Paymentmethod->patchEntity($paymentmethod, $this->request->getData());
            if ($this->Paymentmethod->save($paymentmethod)) {
                $this->Flash->success(__('The paymentmethod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paymentmethod could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentmethod'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paymentmethod id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentmethod = $this->Paymentmethod->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentmethod = $this->Paymentmethod->patchEntity($paymentmethod, $this->request->getData());
            if ($this->Paymentmethod->save($paymentmethod)) {
                $this->Flash->success(__('The paymentmethod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paymentmethod could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentmethod'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paymentmethod id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentmethod = $this->Paymentmethod->get($id);
        if ($this->Paymentmethod->delete($paymentmethod)) {
            $this->Flash->success(__('The paymentmethod has been deleted.'));
        } else {
            $this->Flash->error(__('The paymentmethod could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
