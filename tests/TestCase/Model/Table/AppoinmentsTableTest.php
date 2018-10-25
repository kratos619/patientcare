<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppoinmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppoinmentsTable Test Case
 */
class AppoinmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AppoinmentsTable
     */
    public $Appoinments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.appoinments',
        'app.patients',
        'app.doctors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Appoinments') ? [] : ['className' => AppoinmentsTable::class];
        $this->Appoinments = TableRegistry::getTableLocator()->get('Appoinments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Appoinments);

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
