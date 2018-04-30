<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'test_types';

  	/**
	 * Enabling soft deletes for specimen type details.
	 *
	 */
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];

	//Relationship with test categories

	public function testCategory(){
		return $this->hasMany('TestType', 'test_category_id');
	}

	/**
	 * SpecimenType relationship
	 */
	public function specimenTypes()
	{
	  return $this->belongsToMany('SpecimenType', 'testtype_specimentypes');
	}

	/**
	 * Test relationship
	 */
    public function tests()
    {
        return $this->hasMany('Test', 'test_id');
    }

    
}
