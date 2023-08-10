<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
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

//　追記
Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('news/create', [NewsController::class,'add']);
    Route::post('news/create', [NewsController::class,'create']);
    Route::get('news', [NewsController::class,'index']);
    Route::get('news/edit', [NewsController::class,'edit']);
    Route::post('news/update', [NewsController::class,'update']);
    Route::get('news/delete', [NewsController::class,'delete']);
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');