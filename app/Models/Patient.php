<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'patients';

  //defining relationship with hospitals
  public function hospital()
  {
    return $this->belongsToMany('App\Models\Hospital');
  }
}
