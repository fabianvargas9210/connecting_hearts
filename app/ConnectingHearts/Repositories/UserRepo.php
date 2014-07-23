<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/06/14
 * Time: 01:46 AM
 */

namespace ConnectingHearts\Repositories;
use ConnectingHearts\Managers\RegisterManager;
use ConnectingHearts\Entities\User;
use ConnectingHearts\Managers\BaseManager;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

    public function newUser()
    {
      $user = new User();
      $user->type = 'Pendiente';
      return $user;
    }

}