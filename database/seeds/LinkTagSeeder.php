<?php

use Illuminate\Database\Seeder;

class LinkTagSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$tag = App\Models\Tag::first();
		$link = App\Models\Link::first();

		$link->tags()->sync( [ $tag->id ] );
	}
}
