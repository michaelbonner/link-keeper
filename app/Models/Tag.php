<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $guarded = [];
	
	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function links(){
		return $this->belongsToMany('App\Models\Link');
	}
}
