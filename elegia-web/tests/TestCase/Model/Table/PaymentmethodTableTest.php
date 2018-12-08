<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentmethodTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentmethodTable Test Case
 */
class PaymentmethodTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentmethodTable
     */
    public $Paymentmethod;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paymentmethod'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Paymentmethod') ? [] : ['className' => PaymentmethodTable::class];
        $this->Paymentmethod = TableRegistry::getTableLocator()->get('Paymentmethod', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paymentmethod);

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
}
