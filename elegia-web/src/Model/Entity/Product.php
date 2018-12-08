<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $productID
 * @property int $categoryID
 * @property int $supplierID
 * @property float $price
 * @property int $stock
 * @property string $name
 * @property string $description
 * @property string $image
 */
class Product extends Entity
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
        'categoryID' => true,
        'supplierID' => true,
        'price' => true,
        'stock' => true,
        'name' => true,
        'description' => true,
        'image' => true
    ];
}
