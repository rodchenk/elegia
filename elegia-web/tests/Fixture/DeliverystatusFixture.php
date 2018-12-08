<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeliverystatusFixture
 *
 */
class DeliverystatusFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'deliverystatus';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'statusID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'status' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['statusID'], 'length' => []],
            'status' => ['type' => 'unique', 'columns' => ['status'], 'length' => []],
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
                'statusID' => 1,
                'status' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
