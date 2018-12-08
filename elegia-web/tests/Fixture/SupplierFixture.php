<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SupplierFixture
 *
 */
class SupplierFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'supplier';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'supplierID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 96, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'city' => ['type' => 'string', 'length' => 96, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'supplierID' => ['type' => 'unique', 'columns' => ['supplierID'], 'length' => []],
            'supplier_ibfk_1' => ['type' => 'foreign', 'columns' => ['supplierID'], 'references' => ['user', 'userID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'supplierID' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
