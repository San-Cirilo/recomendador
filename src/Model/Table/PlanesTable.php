<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Planes Model
 *
 * @method \App\Model\Entity\Plane newEmptyEntity()
 * @method \App\Model\Entity\Plane newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Plane[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plane get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plane findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Plane patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plane[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plane|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plane saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plane[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Plane[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Plane[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Plane[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PlanesTable extends Table
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

        $this->setTable('planes');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Empresas',[
            'foreignKey' => 'plan_id'
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
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
