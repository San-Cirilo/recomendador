<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Prospectos Controller
 *
 * @property \App\Model\Table\ProspectosTable $Prospectos
 * @method \App\Model\Entity\Prospecto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProspectosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Industrias','Paises'],
        ];
        $prospectos = $this->paginate($this->Prospectos);

        $this->set(compact('prospectos'));
    }

    /**
     * View method
     *
     * @param string|null $id Prospecto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospecto = $this->Prospectos->get($id, [
            'contain' => ['Paises','Industrias', 'Referencias', 'Solicitudes'],
        ]);

        $this->set(compact('prospecto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospecto = $this->Prospectos->newEmptyEntity();
        if ($this->request->is('post')) {
            $prospecto = $this->Prospectos->patchEntity($prospecto, $this->request->getData());
            if ($this->Prospectos->save($prospecto)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $industrias = $this->Prospectos->Industrias->find('list', ['limit' => 200])->all();
        $paises = $this->Prospectos->Paises->find('list', ['limit' => 200])->all();
        $this->set(compact('prospecto', 'industrias','paises'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospecto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospecto = $this->Prospectos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospecto = $this->Prospectos->patchEntity($prospecto, $this->request->getData());
            if ($this->Prospectos->save($prospecto)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $industrias = $this->Prospectos->Industrias->find('list', ['limit' => 200])->all();
        $this->set(compact('prospecto', 'industrias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospecto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospecto = $this->Prospectos->get($id);
        if ($this->Prospectos->delete($prospecto)) {
            $this->Flash->success(__('The prospecto has been deleted.'));
        } else {
            $this->Flash->error(__('The prospecto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
