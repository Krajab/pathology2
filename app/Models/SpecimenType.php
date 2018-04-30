<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecimenType extends Model
{
  protected $table = 'specimen_types';

  /**
	 * TestType relationship
	 */
	public function testTypes()
	{
	  return $this->belongsToMany('TestType', 'testtype_specimentypes');
	}

	/**
	 * Specimen relationship
	 */
	public function specimen()
	{
	  return $this->hasMany('Specimen');
	}
	
}
