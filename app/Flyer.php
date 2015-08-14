<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	
	//Fillable fileds for a flyer
	protected $fillable = [
		
		'street',
		'city',
		'state',
		'country',
		'zip',
		'price',
		'description'
	];
	
	
    public function photos()
	{
		return $this->hasMany('App\Photo');
	}
}
