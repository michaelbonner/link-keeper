<?php

use Illuminate\Database\Seeder;
use App\Models\Link;
use App\Models\Subject;

class LinksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $subject = Subject::first();
    Link::create([
      'subject_id' => $subject->id,
      'url' => 'https://www.linkedin.com/in/michaelbonner',
      'comment' => 'LinkedIn Profile',
      'type' => 'single',
      'thumbnail' => 'https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAdiAAAAJDM1ZGEwM2Q4LWM1ZTktNGFmMy1hNTljLTFiNjBkYTBlZDZiOQ.jpg',
    ]);
  }
}
