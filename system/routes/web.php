<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin1Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPenulisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;

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


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('user', UserController::class);
    Route::get('user/delete/{user}', [UserController::class, 'destroy']);
    Route::resource('penulis', PenulisController::class);
    Route::put('penulis-update/{penulis}', [PenulisController::class, 'update']);
    Route::get('penulis/delete/{penulis}', [PenulisController::class, 'destroy']);
    Route::resource('blog', BlogController::class);
});

Route::resource('base-penulis', Admin1Controller::class);
Route::resource('blog-penulis', BlogPenulisController::class);
Route::get('show-blog/{blog}', [BlogPenulisController::class, 'show']);
Route::get('edit-blog/{blog}/edit', [BlogPenulisController::class, 'edit']);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);


Route::resource('blog', WebController::class);
Route::get('blog-detail/{blog}', [WebController::class, 'show']);
Route::post('post-komen', [WebController::class, 'store']);


Route::post('balas-komentar', [BlogPenulisController::class, 'balasKomen']);
