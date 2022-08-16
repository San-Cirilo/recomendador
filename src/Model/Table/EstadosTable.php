<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estados Model
 *
 * @property \App\Model\Table\ReferenciasTable&\Cake\ORM\Association\HasMany $Referencias
 * @property \App\Model\Table\SolicitudesTable&\Cake\ORM\Association\HasMany $Solicitudes
 *
 * @method \App\Model\Entity\Estado newEmptyEntity()
 * @method \App\Model\Entity\Estado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Estado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Estado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstadosTable extends Table
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

        $this->setTable('estados');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Referencias', [
            'foreignKey' => 'estado_id',
        ]);
        $this->hasMany('Solicitudes', [
            'foreignKey' => 'estado_id',
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
            ->integer('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        return $validator;
    }
}
