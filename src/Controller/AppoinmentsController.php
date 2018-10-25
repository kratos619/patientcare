<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Appoinments Controller
 *
 * @property \App\Model\Table\AppoinmentsTable $Appoinments
 *
 * @method \App\Model\Entity\Appoinment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppoinmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients', 'Doctors']
        ];
        $appoinments = $this->paginate($this->Appoinments);

        $this->set(compact('appoinments'));
    }

    /**
     * View method
     *
     * @param string|null $id Appoinment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appoinment = $this->Appoinments->get($id, [
            'contain' => ['Patients', 'Doctors']
        ]);

        $this->set('appoinment', $appoinment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appoinment = $this->Appoinments->newEntity();
        if ($this->request->is('post')) {
            $appoinment = $this->Appoinments->patchEntity($appoinment, $this->request->getData());
            if ($this->Appoinments->save($appoinment)) {
                $this->Flash->success(__('The appoinment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoinment could not be saved. Please, try again.'));
        }
        $patients = $this->Appoinments->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appoinments->Doctors->find('list', ['limit' => 200]);
        $this->set(compact('appoinment', 'patients', 'doctors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appoinment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appoinment = $this->Appoinments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appoinment = $this->Appoinments->patchEntity($appoinment, $this->request->getData());
            if ($this->Appoinments->save($appoinment)) {
                $this->Flash->success(__('The appoinment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoinment could not be saved. Please, try again.'));
        }
        $patients = $this->Appoinments->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appoinments->Doctors->find('list', ['limit' => 200]);
        $this->set(compact('appoinment', 'patients', 'doctors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appoinment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appoinment = $this->Appoinments->get($id);
        if ($this->Appoinments->delete($appoinment)) {
            $this->Flash->success(__('The appoinment has been deleted.'));
        } else {
            $this->Flash->error(__('The appoinment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
