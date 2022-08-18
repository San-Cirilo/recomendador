<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Referencias Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\EstadosTable&\Cake\ORM\Association\BelongsTo $Estados
 * @property \App\Model\Table\ProspectosTable&\Cake\ORM\Association\BelongsTo $Prospectos
 *
 * @method \App\Model\Entity\Referencia newEmptyEntity()
 * @method \App\Model\Entity\Referencia newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Referencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Referencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Referencia findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Referencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Referencia[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Referencia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Referencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Referencia[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Referencia[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Referencia[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Referencia[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReferenciasTable extends Table
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

        $this->setTable('referencias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Prospectos', [
            'foreignKey' => 'prospecto_id',
            'joinType' => 'INNER',
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
            ->integer('producto_id')
            ->requirePresence('producto_id', 'create')
            ->notEmptyString('producto_id');

        $validator
            ->integer('usuario_id')
            ->requirePresence('usuario_id', 'create')
            ->notEmptyString('usuario_id');

        $validator
            ->integer('estado_id')
            ->requirePresence('estado_id', 'create')
            ->notEmptyString('estado_id');

        $validator
            ->integer('prospecto_id')
            ->requirePresence('prospecto_id', 'create')
            ->notEmptyString('prospecto_id');

        $validator
            ->scalar('cargo_contacto')
            ->maxLength('cargo_contacto', 45)
            ->requirePresence('cargo_contacto', 'create')
            ->notEmptyString('cargo_contacto');

        $validator
            ->scalar('relacion_contacto')
            ->maxLength('relacion_contacto', 45)
            ->requirePresence('relacion_contacto', 'create')
            ->notEmptyString('relacion_contacto');

        $validator
            ->scalar('detalle')
            ->maxLength('detalle', 200)
            ->requirePresence('detalle', 'create')
            ->notEmptyString('detalle');

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
        $rules->add($rules->existsIn('producto_id', 'Productos'), ['errorField' => 'producto_id']);
        $rules->add($rules->existsIn('usuario_id', 'Usuarios'), ['errorField' => 'usuario_id']);
        $rules->add($rules->existsIn('estado_id', 'Estados'), ['errorField' => 'estado_id']);
        $rules->add($rules->existsIn('prospecto_id', 'Prospectos'), ['errorField' => 'prospecto_id']);

        return $rules;
    }
}
