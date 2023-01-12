<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mission_today;
class MissionController extends Controller
{
        public function mission_today(mission_today $today)
    {
        return $today->get();//$postの中身を戻り値にする。
    }
}
