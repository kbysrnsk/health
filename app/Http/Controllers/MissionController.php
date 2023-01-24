<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mission_today;
use App\Models\Mission;
use App\Models\Category;
class MissionController extends Controller
{
    public function top()//トップページへ移動
    {
        return view('mission/top');
    }
    
        public function mission_today()//今日のミッションページへ移動
    {
        return view('mission/mission_today');
    }
    
    public function mission_create()//ミッション作成画面へ移動
    {
        return view('mission/mission_create');
    }
    
    public function mypage()//マイページへ移動
    {
        return view('health_mypage/mypage');
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
        return redirect('master/mission_master/');
    }
    
        public function edit(Mission $mission)//管理者ミッション編集
    {
        return view('master/edit_master')->with(['mission' => $mission]);
    }
    
        public function update(PostRequest $request, Mission $mission)//管理者ミッション更新
    {
        $input_mission = $request['mission'];
        $mission->fill($input_misiion)->save();
    
        return redirect('/master/mission_master');
    }
}