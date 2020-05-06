<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Link extends Model
{
	protected $guarded = [];

	public function subject()
	{
		return $this->belongsTo(Subject::class);
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}
}
