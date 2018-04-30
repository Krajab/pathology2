<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'test_statuses';

  	/**
	 * Enabling soft deletes for specimen type details.
	 *
	 */
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
}
