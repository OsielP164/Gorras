<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venta Entity
 *
 * @property int $id
 * @property int $id_cliente
 * @property int $id_gorra
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $cantidad_venta
 *
 * @property \App\Model\Entity\Cliente $cliente
 */
class Venta extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'id_cliente' => true,
        'id_gorra' => true,
        'fecha' => true,
        'cantidad_venta' => true,
        'cliente' => true,
    ];
}
