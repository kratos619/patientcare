<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appoinment Entity
 *
 * @property int $id
 * @property int $patient_id
 * @property int $doctor_id
 * @property \Cake\I18n\FrozenTime $appoinment_date
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\Doctor $doctor
 */
class Appoinment extends Entity
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
        'patient_id' => true,
        'doctor_id' => true,
        'appoinment_date' => true,
        'created_at' => true,
        'modified_at' => true,
        'patient' => true,
        'doctor' => true
    ];
}
