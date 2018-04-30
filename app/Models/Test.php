<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'tests';

  /**
	 * Test status constants
	 */
	const NOT_RECEIVED = 1;
	const PENDING = 2;
	const STARTED = 3;
	const COMPLETED = 4;
	const VERIFIED = 5;
	
  //defining relationship with test type
  public function testType()
  {
    return $this->belongsToMany('App\Models\TestType');
  }

  /**
	 * Specimen relationship
	 */
	public function specimen()
	{
		return $this->belongsTo('Specimen');
	}

	/**
	 * Test Status relationship
	 */
	public function testStatus()
	{
		return $this->belongsTo('TestStatus');
	}

	/**
	 * User (created) relationship
	 */
	public function createdBy()
	{
		return $this->belongsTo('User', 'created_by', 'id');
	}

	/**
	 * User (tested) relationship
	 */
	public function testedBy()
	{
		return $this->belongsTo('User', 'tested_by', 'id');
	}

	/**
	 * User (verified) relationship
	 */
	public function verifiedBy()
	{
		return $this->belongsTo('User', 'verified_by', 'id');
	}

	/**
	 * Test Results relationship
	 */
	public function testResults()
	{
		return $this->hasMany('TestResult', 'test_id');
	}
}
