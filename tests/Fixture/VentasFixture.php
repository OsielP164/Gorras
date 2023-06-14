<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VentasFixture
 */
class VentasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'id_cliente' => 1,
                'id_gorra' => 1,
                'fecha' => '2023-06-10',
                'cantidad_venta' => 1,
            ],
        ];
        parent::init();
    }
}
