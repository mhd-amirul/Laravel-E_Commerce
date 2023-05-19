<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function User()
    {
        return $this->user;
    }

    public function getUserByEmailOrId($user)
    {
        return $this->user->where('email', $user)->orWhere("id", $user)->first();
    }
}