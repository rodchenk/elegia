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

    public function isOwnedBy(){

    }

    protected $_accessible = [
        '*' => true,
        'password' => true,
        'id' => false
    ];
}
