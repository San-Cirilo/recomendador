<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Solicitudes Controller
 *
 * @property \App\Model\Table\SolicitudesTable $Solicitudes
 * @method \App\Model\Entity\Solicitude[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productos', 'Prospectos', 'Estados'],
        ];
        $solicitudes = $this->paginate($this->Solicitudes);

        $this->set(compact('solicitudes'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitude id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitude = $this->Solicitudes->get($id, [
            'contain' => ['Productos', 'Prospectos', 'Estados'],
        ]);

        $this->set(compact('solicitude'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitude = $this->Solicitudes->newEmptyEntity();
        if ($this->request->is('post')) {
            $solicitude = $this->Solicitudes->patchEntity($solicitude, $this->request->getData());
            if ($this->Solicitudes->save($solicitude)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $productos = $this->Solicitudes->Productos->find('list', ['limit' => 200])->all();
        $prospectos = $this->Solicitudes->Prospectos->find('list', ['limit' => 200])->all();
        $estados = $this->Solicitudes->Estados->find('list', ['limit' => 200])->all();

        // print_r($productos);exit;
        $this->set(compact('solicitude', 'productos', 'prospectos', 'estados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitude id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitude = $this->Solicitudes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitude = $this->Solicitudes->patchEntity($solicitude, $this->request->getData());
            if ($this->Solicitudes->save($solicitude)) {
                $this->Flash->success(__('Se Guardo Exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocurrio un problema. Intentelo de nuevo.'));
        }
        $productos = $this->Solicitudes->Productos->find('list', ['limit' => 200])->all();
        $prospectos = $this->Solicitudes->Prospectos->find('list', ['limit' => 200])->all();
        $estados = $this->Solicitudes->Estados->find('list', ['limit' => 200])->all();
        $this->set(compact('solicitude', 'productos', 'prospectos', 'estados'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitude id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitude = $this->Solicitudes->get($id);
        if ($this->Solicitudes->delete($solicitude)) {
            $this->Flash->success(__('The solicitude has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitude could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
