<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Geo Model
 *
 * @method \App\Model\Entity\Geo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Geo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Geo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Geo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Geo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Geo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Geo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Geo findOrCreate($search, callable $callback = null, $options = [])
 */
class GeoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('geo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('city')
            ->maxLength('city', 128)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->integer('zip')
            ->requirePresence('zip', 'create')
            ->notEmpty('zip');

        $validator
            ->scalar('landkreis')
            ->maxLength('landkreis', 128)
            ->requirePresence('landkreis', 'create')
            ->notEmpty('landkreis');

        $validator
            ->scalar('bundesland')
            ->maxLength('bundesland', 128)
            ->requirePresence('bundesland', 'create')
            ->notEmpty('bundesland');

        return $validator;
    }
}
