<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GorrasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GorrasTable Test Case
 */
class GorrasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GorrasTable
     */
    protected $Gorras;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Gorras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Gorras') ? [] : ['className' => GorrasTable::class];
        $this->Gorras = $this->getTableLocator()->get('Gorras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Gorras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GorrasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
