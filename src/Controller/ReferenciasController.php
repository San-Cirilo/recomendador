<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Referencias Controller
 *
 * @property \App\Model\Table\ReferenciasTable $Referencias
 * @method \App\Model\Entity\Referencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReferenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productos', 'Usuarios', 'Estados', 'Prospectos'],
        ];
        $referencias = $this->paginate($this->Referencias);

        $this->set(compact('referencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Referencia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $referencia = $this->Referencias->get($id, [
            'contain' => ['Productos', 'Usuarios', 'Estados', 'Prospectos'],
        ]);

        $this->set(compact('referencia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $referencia = $this->Referencias->newEmptyEntity();
        if ($this->request->is('post')) {
            $referencia = $this->Referencias->patchEntity($referencia, $this->request->getData());
            if ($this->Referencias->save($referencia)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $productos = $this->Referencias->Productos->find('list', ['limit' => 200])->all();
        $usuarios = $this->Referencias->Usuarios->find('list', ['limit' => 200])->all();
        $estados = $this->Referencias->Estados->find('list', ['limit' => 200])->all();
        $prospectos = $this->Referencias->Prospectos->find('list', ['limit' => 200])->all();
        $this->set(compact('referencia', 'productos', 'usuarios', 'estados', 'prospectos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Referencia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $referencia = $this->Referencias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $referencia = $this->Referencias->patchEntity($referencia, $this->request->getData());
            if ($this->Referencias->save($referencia)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $productos = $this->Referencias->Productos->find('list', ['limit' => 200])->all();
        $usuarios = $this->Referencias->Usuarios->find('list', ['limit' => 200])->all();
        $estados = $this->Referencias->Estados->find('list', ['limit' => 200])->all();
        $prospectos = $this->Referencias->Prospectos->find('list', ['limit' => 200])->all();
        $this->set(compact('referencia', 'productos', 'usuarios', 'estados', 'prospectos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Referencia id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $referencia = $this->Referencias->get($id);
        if ($this->Referencias->delete($referencia)) {
            $this->Flash->success(__('The referencia has been deleted.'));
        } else {
            $this->Flash->error(__('The referencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
