<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

use Cake\Auth\DefaultPasswordHasher; //include this line
/**
 * User Entity
 *
 * @property int $userID
 * @property string $pwd_hash
 * @property string $email
 */
class User extends Entity
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
        'pwd_hash' => true,
        'email' => true
    ];

    protected function _setPwd_hash($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}