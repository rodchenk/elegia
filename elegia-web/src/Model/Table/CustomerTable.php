<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customer Model
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomerTable extends Table{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('customer');
        $this->setDisplayField('name');
        $this->setPrimaryKey('customerID');

        $this->hasOne('User',['className' => 'User'])
                ->setDependent(true)
                ->setForeignKey('userID');

        // $this->addBehavior('Xety/Cake3Upload.Upload', [
        //         'fields' => [
        //             'image' => [
        //                 'path' => 'upload/u/:md5',
        //                 'overwrite' => false
        //             ]
        //         ]
        //     ]
        // );
    }    

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator){

        $validator
            ->integer('customerID')
            ->allowEmpty('customerID', 'create')
            ->add('customerID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 96)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('city')
            ->maxLength('city', 96)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('street')
            ->maxLength('street', 96)
            ->allowEmpty('street');

        $validator
            ->scalar('house_nr')
            ->maxLength('house_nr', 96)
            ->allowEmpty('house_nr');

        $validator
            ->scalar('description')
            ->maxLength('description', 256)
            ->allowEmpty('description');

        $validator
            ->scalar('image')
            ->maxLength('image', 256)
            ->allowEmpty('image');

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
        $rules->add($rules->isUnique(['customerID']));

        return $rules;
    }
}
