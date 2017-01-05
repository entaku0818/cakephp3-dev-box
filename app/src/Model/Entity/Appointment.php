<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appointment Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $order_id
 * @property \App\Model\Entity\Order $order
 * @property \Cake\I18n\Time $date
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $stop
 * @property string $table
 * @property string $court_id
 * @property \App\Model\Entity\Court $court
 * @property int $max_user
 * @property int $cost
 */
class Appointment extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
