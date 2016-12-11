<?php
namespace App\Persistences\User;

use Auth;

class UserPersistenceEloquent implements UserPersistenceInterface {

   public function checkAuthenticacion()
   {
      if(Auth::check()){
         $user_id = Auth::user()->id;
      }else{
         $user_id = null;
      }

      return $user_id;
   }
}