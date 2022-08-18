<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Perfiles Controller
 *
 * @property \App\Model\Table\PerfilesTable $Perfiles
 * @method \App\Model\Entity\Perfile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $perfiles = $this->paginate($this->Perfiles);

        $this->set(compact('perfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfile = $this->Perfiles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('perfile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfile = $this->Perfiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $perfile = $this->Perfiles->patchEntity($perfile, $this->request->getData());
            if ($this->Perfiles->save($perfile)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $this->set(compact('perfile'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perfile = $this->Perfiles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfile = $this->Perfiles->patchEntity($perfile, $this->request->getData());
            if ($this->Perfiles->save($perfile)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $this->set(compact('perfile'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfile id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfile = $this->Perfiles->get($id);
        if ($this->Perfiles->delete($perfile)) {
            $this->Flash->success(__('The perfile has been deleted.'));
        } else {
            $this->Flash->error(__('The perfile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
