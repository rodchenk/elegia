<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $userID
 * @property string $password
 * @property string $email
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 */
class User extends Entity
{

    protected function _setPassword($value){
      $hasher = new DefaultPasswordHasher();
      return $hasher->hash($value);
    }

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
        'password' => false
    ];
}
