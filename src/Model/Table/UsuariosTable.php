<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SitioUsuarios Model
 *
 * @method \App\Model\Entity\SitioUsuario newEmptyEntity()
 * @method \App\Model\Entity\SitioUsuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SitioUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SitioUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\SitioUsuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SitioUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SitioUsuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SitioUsuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SitioUsuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SitioUsuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SitioUsuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SitioUsuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SitioUsuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsuariosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('usuarios');
        $this->setDisplayField('nombres');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Perfiles',[
            'foreignKey' => 'perfil_id',
            'joinType' =>'INNER'
        ]);

        $this->belongsTo('Empresas',[
            'foreignKey' => 'empresa_id',
            'joinType' =>'INNER'
        ]);
            
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('perfil_id')
            ->requirePresence('perfil_id', 'create')
            ->notEmptyString('perfil_id');

        $validator
            ->integer('empresa_id')
            ->requirePresence('empresa_id', 'create')
            ->notEmptyString('empresa_id');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 50)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 50)
            ->requirePresence('apellidos', 'create')
            ->notEmptyString('apellidos');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 45)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        

        return $validator;
    }

    

    public function findAuth(\Cake\ORM\Query $query, array $options){
        $query  
            ->select(['id','nombres','email','password','perfil_id']);
            
        
        return $query;
    }
    public function recoverPassword($id){
        $usuario = $this->get($id);
        return $usuario->password;
    }

    public function beforeDelete($event,$entity,$options){
        if($entity->perfil_id == 1){
            return false;
        }
        return true;
    }
    
}
