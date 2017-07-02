<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Object;

class Link extends Model
{
	protected $guarded = [];
	
	public function object(){
		return $this->belongsTo('App\Models\Object');
	}

	public function tags(){
		return $this->belongsToMany('App\Models\Tag');
	}
}
