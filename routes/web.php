<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//トップページへ移動
Route::get('/', function(){
    return view('mission/top');
});

//トップページへ移動
Route::get('/mission/top',  [MissionController::class, 'top']);
//今日のミッションページへ移動
Route::get('/mission/mission_today',  [MissionController::class, 'mission_today']);
//ミッション作成ページへ移動
Route::get('/mission/mission_create',  [MissionController::class, 'mission_create']);
//記事ページへ移動
Route::get('/health_article/article',  [ArticleController::class, 'article']);
//記事のお気に入りへ移動
Route::get('/health_article/favorite',  [ArticleController::class, 'favorite']);
//マイページへ移動
Route::get('/health_mypage/mypage',  [MissionController::class, 'mypage']);
//管理者のみのミッション一覧ページへ移動
Route::get('/master/mission_master',  [MissionController::class, 'Mission']);
//管理者ミッション作成
Route::get('/master/create_master', [MissionController::class, 'create']);
//管理者ミッション登録
Route::post('/master/mission_master', [MissionController::class, 'store']);
//管理者ミッション編集、更新
Route::get('/master/create_master/{mission}/edit}', [MissionController::class, 'edit']);
Route::put('/master/create_master/{mission}', [MissionController::class, 'update']);
require __DIR__.'/auth.php';
