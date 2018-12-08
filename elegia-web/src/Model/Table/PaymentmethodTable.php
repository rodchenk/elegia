<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paymentmethod Model
 *
 * @method \App\Model\Entity\Paymentmethod get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paymentmethod newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paymentmethod[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paymentmethod|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paymentmethod|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paymentmethod patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paymentmethod[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paymentmethod findOrCreate($search, callable $callback = null, $options = [])
 */
class PaymentmethodTable extends Table
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

        $this->setTable('paymentmethod');
        $this->setDisplayField('name');
        $this->setPrimaryKey('paymentID');
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
            ->integer('paymentID')
            ->allowEmpty('paymentID', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 96)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
