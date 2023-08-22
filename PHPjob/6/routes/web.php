<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController; 

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

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('post', [PostController::class,'add']);
    Route::post('post', [PostController::class,'create']);
    Route::get('post', [PostController::class,'index']); 

});

Route::get("admin/post",[PostController::class,"add"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
