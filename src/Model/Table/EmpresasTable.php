<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\HasMany $Productos
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\HasMany $Usuarios
 *
 * @method \App\Model\Entity\Empresa newEmptyEntity()
 * @method \App\Model\Entity\Empresa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empresa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('razon_social');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');


        $this->belongsTo('Planes',[
            'foreignKey' => 'plan_id',
            'joinType' =>'INNER'
        ]);
        $this->belongsTo('Paises',[
            'foreignKey' => 'pais_id',
            'joinType' =>'INNER'
        ]);

        $this->hasMany('Productos', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Usuarios', [
            'foreignKey' => 'empresa_id',
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
            ->integer('plan_id')
            ->requirePresence('plan_id', 'create')
            ->notEmptyString('plan_id');

        $validator
            ->scalar('razon_social')
            ->maxLength('razon_social', 100)
            ->requirePresence('razon_social', 'create')
            ->notEmptyString('razon_social');

        $validator
            ->scalar('cedula')
            ->maxLength('cedula', 45)
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->scalar('nombre_contacto')
            ->maxLength('nombre_contacto', 100)
            ->requirePresence('nombre_contacto', 'create')
            ->notEmptyString('nombre_contacto');

        $validator
            ->scalar('email_contacto')
            ->maxLength('email_contacto', 100)
            ->requirePresence('email_contacto', 'create')
            ->notEmptyString('email_contacto');

        $validator
            ->scalar('telefono_contacto')
            ->maxLength('telefono_contacto', 100)
            ->requirePresence('telefono_contacto', 'create')
            ->notEmptyString('telefono_contacto');

        $validator
            ->scalar('usuario')
            ->maxLength('usuario', 45)
            ->requirePresence('usuario', 'create')
            ->notEmptyString('usuario');

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->integer('pais_id')
            ->requirePresence('pais_id', 'create')
            ->notEmptyString('pais_id');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 100)
            ->requirePresence('direccion', 'create')
            ->notEmptyString('direccion');

        $validator
            ->scalar('ciudad')
            ->maxLength('ciudad', 45)
            ->requirePresence('ciudad', 'create')
            ->notEmptyString('ciudad');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 45)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->integer('activo')
            ->requirePresence('activo', 'create')
            ->notEmptyString('activo');

        return $validator;
    }
}
