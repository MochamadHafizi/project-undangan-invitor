<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ScanController;
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
Route::get('tamu/{id}', [TamuController::class, 'index'])->name('data_tamu');
Route::get('tamu/{id}/create', [TamuController::class, 'create'])->name('create_tamu');
Route::post('tamu/simpan/{id}', [TamuController::class, 'store'])->name('simpan_tamu');
Route::delete('tamu/delete/{id}/{id_tamu}', [TamuController::class, 'destroy'])->name('delete_tamu');
Route::get('tamu/{id}/show', [TamuController::class, 'show'])->name('lihat_undangan');
Route::get('acara/{id}', [AcaraController::class, 'index'])->name('data_acara');
Route::get('acara/{id}/create', [AcaraController::class, 'create'])->name('create_acara');
Route::post('acara/simpan/{id}', [AcaraController::class, 'store'])->name('simpan_acara');
Route::delete('acara/delete/{id}/{id_acara}', [AcaraController::class, 'destroy'])->name('delete_acara');
Route::resource('undangan', UndanganController::class);
Route::get('send-mail', [MailController::class, 'index'])->name('send_mail');
Route::get('/scan', [ScanController::class, 'scan'])->name('scan');
// Route::get('/admin/undangan', [UndanganController::class], 'admin')->name('admin');
