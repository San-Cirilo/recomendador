<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prospectos Model
 *
 * @property \App\Model\Table\IndustriasTable&\Cake\ORM\Association\BelongsTo $Industrias
 * @property \App\Model\Table\ReferenciasTable&\Cake\ORM\Association\HasMany $Referencias
 * @property \App\Model\Table\SolicitudesTable&\Cake\ORM\Association\HasMany $Solicitudes
 *
 * @method \App\Model\Entity\Prospecto newEmptyEntity()
 * @method \App\Model\Entity\Prospecto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Prospecto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prospecto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prospecto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Prospecto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prospecto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prospecto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prospecto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prospecto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prospecto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prospecto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prospecto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProspectosTable extends Table
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

        $this->setTable('prospectos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Industrias', [
            'foreignKey' => 'industria_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Paises', [
            'foreignKey' => 'pais_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Referencias', [
            'foreignKey' => 'prospecto_id',
        ]);
        $this->hasMany('Solicitudes', [
            'foreignKey' => 'prospecto_id',
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
            ->integer('industria_id')
            ->requirePresence('industria_id', 'create')
            ->notEmptyString('industria_id');

        $validator
            ->integer('pais_id')
            ->requirePresence('pais_id', 'create')
            ->notEmptyString('pais_id');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('industria_id', 'Industrias'), ['errorField' => 'industria_id']);

        return $rules;
    }
}
