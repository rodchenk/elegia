<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Basket Model
 *
 * @method \App\Model\Entity\Basket get($primaryKey, $options = [])
 * @method \App\Model\Entity\Basket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Basket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Basket|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Basket|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Basket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Basket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Basket findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BasketTable extends Table
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

        $this->setTable('basket');
        $this->setDisplayField('basketID');
        $this->setPrimaryKey('basketID');

        $this->addBehavior('Timestamp');
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
            ->integer('basketID')
            ->allowEmpty('basketID', 'create');

        $validator
            ->integer('customerID')
            ->requirePresence('customerID', 'create')
            ->notEmpty('customerID');

        return $validator;
    }
}
