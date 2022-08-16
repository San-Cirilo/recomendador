<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Industrias Model
 *
 * @property \App\Model\Table\ProspectosTable&\Cake\ORM\Association\HasMany $Prospectos
 * @property \App\Model\Table\TiposerviciosTable&\Cake\ORM\Association\BelongsToMany $Tiposervicios
 *
 * @method \App\Model\Entity\Industria newEmptyEntity()
 * @method \App\Model\Entity\Industria newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Industria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Industria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Industria findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Industria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Industria[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Industria|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Industria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Industria[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Industria[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Industria[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Industria[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IndustriasTable extends Table
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

        $this->setTable('industrias');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Prospectos', [
            'foreignKey' => 'industria_id',
        ]);
        $this->belongsToMany('Tiposervicios', [
            'foreignKey' => 'industria_id',
            'targetForeignKey' => 'tiposervicio_id',
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
