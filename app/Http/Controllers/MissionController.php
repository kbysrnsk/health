<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission_today;
use App\Models\Mission;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MissionController extends Controller
{
    public function redirectPath()
    {
        return view('mission/top');
    }
    
   
    
    
    public function top()//トップページへ移動
    {
        return view('mission/top');
    }
    
        public function mission_today(Mission_today $mission_today)//今日のミッションページへ移動
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today();
        if(Mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->exists())
        {
        return view('mission/today_created',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
        }else{
        return view('mission/mission_today',['mypage' => $user]);
        }
    }
    
    public function mission_create()//ミッション作成画面へ移動
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('mission/mission_create',['mypage' => $user]);
    }
    
    public function mypage(Mission_today $mission_today)//マイページへ移動
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today();
        return view('health_mypage/mypage',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
    
    
    
    public function yesterday(Mission_today $mission_today)//マイページ->昨日の記録
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today()->subDay();
        return view('health_mypage/mypage-1',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
     public function two_before(Mission_today $mission_today)//マイページ->2日前の記録
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today()->subDay(2);
        return view('health_mypage/mypage-2',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
     public function three_before(Mission_today $mission_today)//マイページ->3日前の記録
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today()->subDay(3);
        return view('health_mypage/mypage-3',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
     public function four_before(Mission_today $mission_today)//マイページ->4日前の記録
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today()->subDay(4);
        return view('health_mypage/mypage-4',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
     public function five_before(Mission_today $mission_today)//マイページ->5日前の記録
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today()->subDay(5);
        return view('health_mypage/mypage-5',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
     public function six_before(Mission_today $mission_today)//マイページ->6日前の記録
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today()->subDay(6);
        return view('health_mypage/mypage-6',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
     public function seven_before(Mission_today $mission_today)//マイページ->7日前の記録
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today()->subDay(7);
        return view('health_mypage/mypage-7',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    public function Mission(Mission $mission)//管理者のみのミッション一覧ページへ移動
    {
        return view('master/mission_master')->with(['mission' => $mission->get()]);
    }
    
         public function create(Category $category)//管理者ミッション作成
    {
        return view('master/create_master')->with(['category' => $category->get()]);
    }
    
        public function store(Request $request, Mission $mission)//管理者ミッション登録
    {
        $input = $request['mission'];
        $mission->fill($input)->save();
        return redirect('master/mission_master/' .$mission->id);
    }
    
    
    
        public function delete(Mission $mission)//管理者ミッション削除
    {
        $mission->delete();
        return redirect('/master/mission_master');
    }
    
        public function show(Mission $mission)//管理者ミッション詳細
    {
        return view('/master/show_master')->with(['mission' => $mission]);
    }
    
        public function make(Request $request, Mission_today $mission_today)//デイリーミッション作成
    {
        $meal_int=$request->input('meal_int');//各ミッション個数を取得
        $exercise_int=$request->input('exercise_int');
        $sleep_int=$request->input('sleep_int');
        $mental_int=$request->input('mental_int');
        $user_id = Auth::id();
        $user = User::find($user_id);
        
        
        $mission_ids = [];
        $meal=Mission::where('category_id', '1')->inRandomOrder()->take($meal_int)->get();//食事ミッションを取得
        foreach($meal as $m){
            array_push($mission_ids, $m->id);
        }
        $exercise=Mission::where('category_id', '2')->inRandomOrder()->take($exercise_int)->get();//運動ミッションを取得
        foreach($exercise as $e){
            array_push($mission_ids, $e->id);
        }
        $sleep=Mission::where('category_id', '3')->inRandomOrder()->take($sleep_int)->get();//睡眠ミッションを取得
        foreach($sleep as $s){
            array_push($mission_ids, $s->id);
        }
        $mental=Mission::where('category_id', '4')->inRandomOrder()->take($mental_int)->get();//メンタルミッションを取得
        foreach($mental as $m){
            array_push($mission_ids, $m->id);
        }
    
        foreach($mission_ids as $id){
            $mission_today = new Mission_today;
            $mission_today->mission_id = $id;
            $mission_today->user_id = $user_id;
            $mission_today->save();
        }
        return redirect('/mission/today_created');
    
    }
    
    public function created(Mission_today $mission_today)//今日のミッション表示
    {
        $id = Auth::id();
        $user = User::find($id);
        $today=Carbon::today();
        return view('mission/today_created',['mypage' => $user])->with(['mission_todays' => $mission_today::whereDay('created_at', $today)->where('user_id', $user->id)->get()]);
    }
    
    
    
    
}