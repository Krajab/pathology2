<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestCategory extends Model
{
  protected $table = 'test_categories';

  	/**
	 * Enabling soft deletes for test category details.
	 *
	 */
	// use SoftDeletingTrait;
	protected $dates = ['deleted_at'];

	/**
	 * Test types relationship
	 *
	 */
	public function testTypes(){
         return $this->hasMany('TestType', 'test_category_id');
      }
}
