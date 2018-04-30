<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'specimens';

  //defining relationship with clinical history
  public function patient()
  {
    return $this->belongsTo('App\Models\Patient');
  }

  public $timestamps = false;
	/**
	 * Specimen status constants
	 */
	const NOT_COLLECTED = 1;
	const ACCEPTED = 2;
	const REJECTED = 3;
	// change constant to REFERRED_OUT
	const REFERRED = 4;
	/**
	 * Test Phase relationship
	 */
	// public function testPhase()
	// {
	// 	return $this->belongsTo('TestPhase');
	// }
	
	/**
	 * Specimen Status relationship
	 */
	public function specimenStatus()
	{
		return $this->belongsTo('SpecimenStatus');
	}
	
	/**
	 * Specimen Type relationship
	 */
	public function specimenType()
	{
		return $this->belongsTo('SpecimenType');
	}

	/**
	 * Rejected specimen relationship
	 */


	/**
	 * Rejected specimen relationship
	 */


	/**
	 * Test relationship
	 */
	public function tests()
    {
        return $this->hasMany('Test', 'specimen_id');
    }

    /**
	 * referrals relationship
	 */

    
    /**
	 * User (accepted) relationship
	 */
	public function acceptedBy()
	{
		return $this->belongsTo('User', 'accepted_by', 'id');
	}

    /**
	 * Check if specimen is referred
	 *
	 * @return boolean
	 */
    public function isReferred()
    {
    	if(is_null($this->referral))
    	{
    		return false;
    	}
    	else {
    		return true;
    	}
    }

    /**
    * Check if specimen is NOT_COLLECTED
    *
    * @return boolean
    */
    public function isNotCollected()
    {
        if($this->specimen_status_id == Specimen::NOT_COLLECTED)
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    /**
    * Check if specimen is ACCEPTED
    *
    * @return boolean
    */
    public function isAccepted()
    {
        if($this->specimen_status_id == Specimen::ACCEPTED)
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    /**
    * Check if specimen is rejected
    *
    * @return boolean
    */
    public function isRejected()
    {
        if($this->specimen_status_id == Specimen::REJECTED)
        {
            return true;
        }
        else {
            return false;
        }
    }

}

