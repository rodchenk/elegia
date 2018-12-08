<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deliverystatus Model
 *
 * @method \App\Model\Entity\Deliverystatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Deliverystatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Deliverystatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Deliverystatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deliverystatus|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deliverystatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Deliverystatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Deliverystatus findOrCreate($search, callable $callback = null, $options = [])
 */
class DeliverystatusTable extends Table
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

        $this->setTable('deliverystatus');
        $this->setDisplayField('statusID');
        $this->setPrimaryKey('statusID');
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
            ->integer('statusID')
            ->allowEmpty('statusID', 'create');

        $validator
            ->scalar('status')
            ->maxLength('status', 256)
            ->requirePresence('status', 'create')
            ->notEmpty('status')
            ->add('status', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['status']));

        return $rules;
    }
}
