<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Tag;

class TagsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$tag = Tag::create([
			'name' => Str::random(10),
			'slug' => Str::random(10)
		]);
	}
}
