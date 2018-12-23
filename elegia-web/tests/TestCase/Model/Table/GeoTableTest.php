<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoTable Test Case
 */
class GeoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoTable
     */
    public $Geo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.geo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Geo') ? [] : ['className' => GeoTable::class];
        $this->Geo = TableRegistry::getTableLocator()->get('Geo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Geo);

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
