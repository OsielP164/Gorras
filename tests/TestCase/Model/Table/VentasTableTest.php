<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VentasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VentasTable Test Case
 */
class VentasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VentasTable
     */
    protected $Ventas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ventas',
        'app.Clientes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ventas') ? [] : ['className' => VentasTable::class];
        $this->Ventas = $this->getTableLocator()->get('Ventas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ventas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VentasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
