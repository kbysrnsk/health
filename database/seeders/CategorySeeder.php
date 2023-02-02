<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'category_name' => 'meal',
         ]);
         
          DB::table('categories')->insert([
                'category_name' => 'exercise',
         ]);
         
          DB::table('categories')->insert([
                'category_name' => 'sleep',
         ]);
         
          DB::table('categories')->insert([
                'category_name' => 'mental',
         ]);
    }
}
