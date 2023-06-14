<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GorrasFixture
 */
class GorrasFixture extends TestFixture
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
                'marca' => 'Lorem ipsum dolor sit amet',
                'modelo' => 'Lorem ipsum dolor sit amet',
                'color' => 'Lorem ipsum dolor sit amet',
                'talla' => 'Lorem ip',
                'precio' => 1.5,
                'cantidad' => 1,
            ],
        ];
        parent::init();
    }
}
