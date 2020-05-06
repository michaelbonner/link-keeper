<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\User;

class SubjectsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $user = User::first();
    Subject::create([
      'user_id' => $user->id,
      'title' => 'Michael Bonner',
      'slug' => 'michael-bonner',
      'description' => 'Some developer in Salt Lake',
      'featured_image' => 'https://media-exp1.licdn.com/dms/image/C4D03AQEr4lnZOt1Kng/profile-displayphoto-shrink_200_200/0?e=1594252800&v=beta&t=x2bH5_J04VjbJWc7vg2SpNmAm61q37Stpi_PLv6k2-Q'
    ]);
  }
}
