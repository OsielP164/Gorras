<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gorras Model
 *
 * @method \App\Model\Entity\Gorra newEmptyEntity()
 * @method \App\Model\Entity\Gorra newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Gorra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gorra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gorra findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Gorra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gorra[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gorra|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gorra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gorra[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gorra[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gorra[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gorra[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GorrasTable extends Table
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

        $this->setTable('gorras');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('marca')
            ->maxLength('marca', 100)
            ->requirePresence('marca', 'create')
            ->notEmptyString('marca');

        $validator
            ->scalar('modelo')
            ->maxLength('modelo', 100)
            ->requirePresence('modelo', 'create')
            ->notEmptyString('modelo');

        $validator
            ->scalar('color')
            ->maxLength('color', 100)
            ->requirePresence('color', 'create')
            ->notEmptyString('color');

        $validator
            ->scalar('talla')
            ->maxLength('talla', 10)
            ->requirePresence('talla', 'create')
            ->notEmptyString('talla');

        $validator
            ->decimal('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->integer('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmptyString('cantidad');

        return $validator;
    }
}
