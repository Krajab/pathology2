<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'clinical_history';

  //defining relationship with clinical history
  public function patient()
  {
    return $this->belongsTo('App\Models\Patient');
  }
}
