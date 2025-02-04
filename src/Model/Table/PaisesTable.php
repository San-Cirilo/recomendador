<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paises Model
 *
 * @method \App\Model\Entity\Paise newEmptyEntity()
 * @method \App\Model\Entity\Paise newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Paise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paise findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Paise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paise[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paise|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paise saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paise[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paise[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paise[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paise[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PaisesTable extends Table
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

        $this->setTable('paises');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Empresas',[
            'foreignKey' => 'pais_id'
        ]);
        $this->hasMany('Prospectos',[
            'foreignKey' => 'pais_id'
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

        $validator
            ->scalar('bandera')
            ->maxLength('bandera', 45)
            ->requirePresence('bandera', 'create')
            ->notEmptyString('bandera');

        return $validator;
    }
}
