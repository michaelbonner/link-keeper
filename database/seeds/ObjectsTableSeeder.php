<?php

use Illuminate\Database\Seeder;
use App\Models\{User,Object};

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = User::first();
		$object = Object::create([
			'user_id' => $user->id,
			'title' => 'Michael Bonner',
			'description' => 'Some developer in Salt Lake',
			'featured_image' => 'https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAdiAAAAJDM1ZGEwM2Q4LWM1ZTktNGFmMy1hNTljLTFiNjBkYTBlZDZiOQ.jpg'
		]);
    }
}
