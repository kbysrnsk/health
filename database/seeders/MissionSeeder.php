<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use DateTime;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('missions')->insert([
                'category_id' => 1,
                'mission_title' =>'meal',
                'mission_body' =>'1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 2,
                'mission_title' =>'exercise',
                'mission_body' =>'1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 3,
                'mission_title' =>'sleep',
                'mission_body' =>'1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 4,
                'mission_title' =>'mental',
                'mission_body' =>'1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
    }
}
