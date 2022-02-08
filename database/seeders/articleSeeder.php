<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\category;
use Faker\Factory as Faker;
use Nette\Utils\Random;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        $title=Str::slug($faker->sentence(3));
      for($i=1;$i<=5;$i++){
          DB::table('articles')->insert([
              'category_id'=>rand(1,7),
              'title'=>$title,
              'img'=>$faker->imageUrl(150,150,'cats'),
              'content'=>$faker->paragraph(2),
              'slug'=>$title



          ]);
      }





    }
}
