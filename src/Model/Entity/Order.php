<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $ID
 * @property int|null $CLIENT_ID
 * @property int|null $EMPLOYEE_ID
 * @property \Cake\I18n\FrozenDate $Date
 * @property int|null $Amount
 * @property string|null $Description
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'CLIENT_ID' => true,
        'EMPLOYEE_ID' => true,
        'Date' => true,
        'Amount' => true,
        'Description' => true,
    ];
}
