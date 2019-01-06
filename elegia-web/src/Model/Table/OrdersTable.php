<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdersTable extends Table{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('orders');
        $this->setDisplayField('orderID');
        $this->setPrimaryKey('orderID');

        $this->belongsTo('Product', ['className' => 'Product', 'propertyName' => 'productID'])
                ->setDependent(true)
                ->setForeignKey('productID');

        $this->belongsTo('Customer', ['className' => 'Customer', 'propertyName' => 'customerID'])
                ->setDependent(true)
                ->setForeignKey('customerID');
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
            ->integer('orderID')
            ->allowEmpty('orderID', 'create');

        $validator
            ->integer('customerID')
            ->requirePresence('customerID', 'create')
            ->notEmpty('customerID');

        $validator
            ->integer('productID')
            ->requirePresence('productID', 'create')
            ->notEmpty('productID');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        $validator
            ->scalar('status')->requirePresence('amount', 'create');

        return $validator;
    }
}
