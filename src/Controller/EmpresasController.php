<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empresas Controller
 *
 * @property \App\Model\Table\EmpresasTable $Empresas
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpresasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $empresas = $this->paginate($this->Empresas);

        $this->set(compact('empresas'));
    }

    /**
     * View method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresa = $this->Empresas->get($id, [
            'contain' => ['Productos', 'Usuarios'],
        ]);

        $this->set(compact('empresa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planes = $this->getTableLocator()->get('Planes');
        $opt =  $planes->find()->all()->combine('id','nombre');
        foreach ($opt as $index => $name) {
            $optPlan[$index] = $name;
        }
        
       
        $paises = $this->getTableLocator()->get('Paises');
        $optpaises =  $paises->find()->all()->combine('id','nombre');
        foreach ($optpaises as $index => $name) {
            $optPais[$index] = $name;
        }
        
        $empresa = $this->Empresas->newEmptyEntity();
        if ($this->request->is('post')) {
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->getData());
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('Se Guardo correctamente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar.Intentelo nuevamente.'));
        }
        $this->set(compact('empresa','optPlan','optPais'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $planes = $this->getTableLocator()->get('Planes');
        $opt =  $planes->find()->all()->combine('id','nombre');
        foreach ($opt as $index => $name) {
            $optPlan[$index] = $name;
        }
        
       
        $paises = $this->getTableLocator()->get('Paises');
        $optpaises =  $paises->find()->all()->combine('id','nombre');
        foreach ($optpaises as $index => $name) {
            $optPais[$index] = $name;
        }
        

        $empresa = $this->Empresas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresa = $this->Empresas->patchEntity($empresa, $this->request->getData());
            if ($this->Empresas->save($empresa)) {
                $this->Flash->success(__('The empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresa could not be saved. Please, try again.'));
        }
        $this->set(compact('empresa','optPlan','optPais'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresa = $this->Empresas->get($id);
        if ($this->Empresas->delete($empresa)) {
            $this->Flash->success(__('The empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
