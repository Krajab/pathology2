<?php
namespace App\Models;

class Personnel extends \Eloquent
{
	protected $table = "persons";

		/**
	* Relationship with cadres
	*/
	public function Cadre()
	{
		return $this->belongsTo('App\Models\Cadre');
	}
}