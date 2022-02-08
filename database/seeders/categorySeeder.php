<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



       $kategoriler=['Eğitim','Okul','İş','Gezi','Teknoloji','Sağlık','Günlük'];

         foreach($kategoriler as $kategori){
            DB::table('categories')->insert([
                'name'=>$kategori,
                'slug'=>Str::slug($kategori),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
         }

    }
}
