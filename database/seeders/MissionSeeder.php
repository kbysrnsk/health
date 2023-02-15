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
                'mission_title' =>'今日は甘いものはやめよう',
                'mission_body' =>'砂糖がたくさん入っている食べ物は体に良くないよ！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 1,
                'mission_title' =>'1日2食',
                'mission_body' =>'今日は1日2食にしてみよう。目覚めが良くなるかも！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 1,
                'mission_title' =>'ベリー系のフルーツを食べよう',
                'mission_body' =>'ベリー系に含まれるポリフェノールは肌をきれいにしてくれるよ！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 1,
                'mission_title' =>'魚を食べよう',
                'mission_body' =>'魚は脳機能の改善に効果的！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 1,
                'mission_title' =>'加工食品を控えよう',
                'mission_body' =>'加工食品を控えるとメンタルが安定！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         
         DB::table('missions')->insert([
                'category_id' => 2,
                'mission_title' =>'散歩をしよう',
                'mission_body' =>'15分歩いてみよう。気分がすっきり！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 2,
                'mission_title' =>'HIITをしてみよう',
                'mission_body' =>'30秒間全力で動いて30秒間休憩を10分続けよう！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 2,
                'mission_title' =>'階段で移動しよう',
                'mission_body' =>'今日はエレベーター、エスカレーターを使わずに過ごしてみよう！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 2,
                'mission_title' =>'座る時間を少なくしよう',
                'mission_body' =>'できるだけ立って生活してみよう！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 2,
                'mission_title' =>'筋トレをしよう',
                'mission_body' =>'筋トレをするとアンチエイジングに良い効果が！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 3,
                'mission_title' =>'寝る3時間前は食事を控えよう',
                'mission_body' =>'寝る前の食事をなくすとぐっすり眠れるよ！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 3,
                'mission_title' =>'日光を浴びよう',
                'mission_body' =>'日光を浴びるとセロトニンが分泌されてすっきり起きられるよ！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 3,
                'mission_title' =>'寝る前に入浴しよう',
                'mission_body' =>'入浴で体を温めるとリラックスして眠れるよ！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 3,
                'mission_title' =>'スマホをみないで！',
                'mission_body' =>'寝る前の1時間はスマホをみないようにしよう！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 3,
                'mission_title' =>'カフェインに気を付けて！',
                'mission_body' =>'夜にお茶やコーヒーを飲むと眠れなくなるかも！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
          DB::table('missions')->insert([
                'category_id' => 4,
                'mission_title' =>'瞑想をしよう',
                'mission_body' =>'10分間目をつむって聞こえる音に集中しよう！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 4,
                'mission_title' =>'今日を振り返ろう',
                'mission_body' =>'今日あった良いことを3つ書き出そう！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 4,
                'mission_title' =>'今日は楽しい行動を選ぶように心がけよう',
                'mission_body' =>'迷ったときは楽しいと思う方を選ぼう！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 4,
                'mission_title' =>'つらいことがあったときは深呼吸しよう',
                'mission_body' =>'メンタルは呼吸によってコントロールできるよ！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
         
         DB::table('missions')->insert([
                'category_id' => 4,
                'mission_title' =>'つらいときは感情を書き出そう',
                'mission_body' =>'感情を書き出して整理すると心が楽になるよ！',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => null,
         ]);
    }
}
