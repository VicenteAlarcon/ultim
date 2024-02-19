<?php

namespace App\Services;
use App\Models\User;

class UserControllerService
{

   public function getAllUsers()
   {
    return User::all();
   }

   public function getConcreteUser($id)
   {
    return User::find($id);
   }

   public function createUser($userData)
   {
     return User::create($userData);

   }

   public function updateUser($userId, $userData)
   {
    $user = findOrFail($userId);
    $user->update($userData);
    return $user;

   }

}