<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Link,Object};

class Object extends Model
{

	protected $guarded = [];

	public function getRouteKeyName(){
		return 'slug';
	}

	public function links(){
		return $this->hasMany('App\Models\Link');
	}

	public function object(){
		return $this->belongsTo('App\Models\Object');
	}
}
