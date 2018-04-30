<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
  	protected $table = "users";

  public function role()
  {
    return $this->belongsTo('App\Models\Role');
  }
}
