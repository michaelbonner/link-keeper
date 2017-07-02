<?php

use Illuminate\Database\Seeder;

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
			'name' => str_random(10),
			'slug' => str_random(10)
		]);
	}
}
