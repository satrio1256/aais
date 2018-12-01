<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
  public function getUser($email, $password)
  {
    $user = DB::table('user_database')
    ->where('Email', $email)
    ->where('Password', $password)
    ->get();
    if (count($user) != 1) {
      return null;
    } else {
      return $user[0];
    }
  }
}
