<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function beforeFilter(EventInterface $event){
        parent::beforeFilter($event);
        // print_r($event);exit;
        $this->Auth->allow(['/login','home']);
    }

    public function isAuthorized($usuario) {
        if(isset($usuario['perfil_id']) and $usuario['perfil_id'] == 1){
            if(in_array($this->request->getParam('action'),['index', 'logout','add','edit'])){
                return true;
            }
        }
        return parent::isAuthorized($usuario);
    }

    public function login(){
        
        
        if($this->request->is('post')){
            
            $usuario =  $this->Auth->identify();
            
            if($usuario){
                if($usuario['perfil_id'] ==1){
                    $this->Auth->setUser($usuario);
                    return $this->redirect($this->Auth->redirectURL());
                }else{
                    $this->Flash->error(__('Usuario Inactivo.'));
                }
            }else{
                $this->Flash->error('Invalid data',['key' => 'auth']);
            }
        }
        if($this->Auth->user()){
            return $this->redirect(['controller' => 'Usuarios','action' => 'index']);
        }

        
    }

    public function logout(){

        return $this->redirect($this->Auth->logout());

    }


    public function index()
    {
        $Usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('Usuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Sitio Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $Usuario = $this->Usuarios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('Usuario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $Perfil = $this->getTableLocator()->get('Perfiles');
        $optPerfil =  $Perfil->find()->all()->combine('id','nombre');
        foreach ($optPerfil as $index => $name) {
            $optPerfiles[$index] = $name;
        }

        $Empresa = $this->getTableLocator()->get('Empresas');
        $optEmpresa =  $Empresa->find()->all()->combine('id','razon_social');
        foreach ($optEmpresa as $index => $name) {
            $optEmpresas[$index] = $name;
        }
        

        $Usuario = $this->Usuarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $Usuario = $this->Usuarios->patchEntity($Usuario, $this->request->getData());
            
            if ($this->Usuarios->save($Usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('Usuario','optPerfiles','optEmpresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sitio Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $Perfil = $this->getTableLocator()->get('Perfiles');
        $optPerfil =  $Perfil->find()->all()->combine('id','nombre');
        foreach ($optPerfil as $index => $name) {
            $optPerfiles[$index] = $name;
        }

        $Empresa = $this->getTableLocator()->get('Empresas');
        $optEmpresa =  $Empresa->find()->all()->combine('id','razon_social');
        foreach ($optEmpresa as $index => $name) {
            $optEmpresas[$index] = $name;
        }

        $Usuario = $this->Usuarios->get($id, [
            'contain' => [],
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Usuario = $this->Usuarios->patchEntity($Usuario, $this->request->getData());
            
            if ($this->Usuarios->save($Usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('Usuario','optPerfiles','optEmpresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sitio Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The sitio usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The sitio usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
