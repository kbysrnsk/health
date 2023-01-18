<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mission_today;
class MissionController extends Controller
{
    public function top()
    {
        return view('mission/top');
    }
    
        public function mission_today()
    {
        return view('mission/mission_today');
    }
    
    public function mission_create()
    {
        return view('mission/mission_create');
    }
    
    public function mypage()
    {
        return view('health_mypage/mypage');
    }
}
