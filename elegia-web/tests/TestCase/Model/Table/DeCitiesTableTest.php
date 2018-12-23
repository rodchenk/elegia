<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeCitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeCitiesTable Test Case
 */
class DeCitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeCitiesTable
     */
    public $DeCities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.de_cities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DeCities') ? [] : ['className' => DeCitiesTable::class];
        $this->DeCities = TableRegistry::getTableLocator()->get('DeCities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeCities);

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
