<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Referencia Entity
 *
 * @property int $id
 * @property int $producto_id
 * @property int $usuario_id
 * @property int $estado_id
 * @property int $prospecto_id
 * @property string $cargo_contacto
 * @property string $relacion_contacto
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Prospecto $prospecto
 */
class Referencia extends Entity
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
        'producto_id' => true,
        'usuario_id' => true,
        'estado_id' => true,
        'prospecto_id' => true,
        'cargo_contacto' => true,
        'relacion_contacto' => true,
        'detalle' => true,
        'created' => true,
        'modified' => true,
        'producto' => true,
        'usuario' => true,
        'estado' => true,
        'prospecto' => true,
    ];
}
