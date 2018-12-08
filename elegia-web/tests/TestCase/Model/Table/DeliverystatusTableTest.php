<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliverystatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliverystatusTable Test Case
 */
class DeliverystatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliverystatusTable
     */
    public $Deliverystatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.deliverystatus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Deliverystatus') ? [] : ['className' => DeliverystatusTable::class];
        $this->Deliverystatus = TableRegistry::getTableLocator()->get('Deliverystatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Deliverystatus);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
