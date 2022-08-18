<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Industrias Controller
 *
 * @property \App\Model\Table\IndustriasTable $Industrias
 * @method \App\Model\Entity\Industria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndustriasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $industrias = $this->paginate($this->Industrias);

        $this->set(compact('industrias'));
    }

    /**
     * View method
     *
     * @param string|null $id Industria id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $industria = $this->Industrias->get($id, [
            'contain' => ['Tiposervicios', 'Prospectos'],
        ]);

        $this->set(compact('industria'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $industria = $this->Industrias->newEmptyEntity();
        if ($this->request->is('post')) {
            $industria = $this->Industrias->patchEntity($industria, $this->request->getData());
            if ($this->Industrias->save($industria)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $tiposervicios = $this->Industrias->Tiposervicios->find('list', ['limit' => 200])->all();
        $this->set(compact('industria', 'tiposervicios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Industria id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $industria = $this->Industrias->get($id, [
            'contain' => ['Tiposervicios'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $industria = $this->Industrias->patchEntity($industria, $this->request->getData());
            if ($this->Industrias->save($industria)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $tiposervicios = $this->Industrias->Tiposervicios->find('list', ['limit' => 200])->all();
        $this->set(compact('industria', 'tiposervicios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Industria id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $industria = $this->Industrias->get($id);
        if ($this->Industrias->delete($industria)) {
            $this->Flash->success(__('The industria has been deleted.'));
        } else {
            $this->Flash->error(__('The industria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
