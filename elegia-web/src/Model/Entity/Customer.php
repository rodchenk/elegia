<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $customerID
 * @property string $name
 * @property string $city
 * @property string|null $street
 * @property string|null $house_nr
 * @property string|null $description
 * @property string|null $image
 */
class Customer extends Entity
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
        'customerID' => true,
        'name' => true,
        'city' => true,
        'street' => true,
        'house_nr' => true,
        'description' => true,
        'image' => true
    ];
}
