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
                'category_name' => '食事',
         ]);
         
          DB::table('categories')->insert([
                'category_name' => '運動',
         ]);
         
          DB::table('categories')->insert([
                'category_name' => '睡眠',
         ]);
         
          DB::table('categories')->insert([
                'category_name' => 'メンタルヘルス',
         ]);
    }
}
