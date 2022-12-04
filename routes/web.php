<?php

use App\Http\Controllers\DataUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);
Route::get('/', function(){
    return view('landingPage');
});
Route::controller(HomeController::class)->group( function() {
Route::get('/home', 'index')->name('home');
Route::get('admin/home', 'handleAdmin')->name('admin.route')->middleware('admin');
});
Route::resource('dataUser', DataUserController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('tamu', TamuController::class);
Route::resource('undangan', UndanganController::class);
