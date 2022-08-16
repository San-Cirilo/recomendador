<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiposervicios Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\HasMany $Productos
 * @property \App\Model\Table\IndustriasTable&\Cake\ORM\Association\BelongsToMany $Industrias
 *
 * @method \App\Model\Entity\Tiposervicio newEmptyEntity()
 * @method \App\Model\Entity\Tiposervicio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tiposervicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiposervicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tiposervicio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tiposervicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposervicio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiposervicio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposervicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiposervicio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tiposervicio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tiposervicio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tiposervicio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TiposerviciosTable extends Table
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

        $this->setTable('tiposervicios');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Productos', [
            'foreignKey' => 'tiposervicio_id',
        ]);
        $this->belongsToMany('Industrias', [
            'foreignKey' => 'tiposervicio_id',
            'targetForeignKey' => 'industria_id',
            'joinTable' => 'tiposervicios_industrias',
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
