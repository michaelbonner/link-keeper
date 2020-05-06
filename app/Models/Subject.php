<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

	protected $guarded = [];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function links()
	{
		return $this->hasMany(Link::class);
	}
}
