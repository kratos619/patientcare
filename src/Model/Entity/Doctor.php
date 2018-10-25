<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doctor Entity
 *
 * @property int $id
 * @property string $name
 * @property int $accepting_patients
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Appoinment[] $appoinments
 */
class Doctor extends Entity
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
        'name' => true,
        'accepting_patients' => true,
        'created_at' => true,
        'modified' => true,
        'appoinments' => true
    ];
}
