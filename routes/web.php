<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\PegawaiController;

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});


Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'dashboard'])->name('dashboard');
    Route::get('/index', [SuperadminController::class, 'index'])->name('index');
    Route::get('/create', [SuperadminController::class, 'create'])->name('create');
    Route::post('/store', [SuperadminController::class, 'store'])->name('store');
    Route::get('/show/{id}', [SuperadminController::class, 'show'])->name('show');
    Route::get('/superadmin/{id}/edit', [SuperadminController::class, 'edit'])->name('edit');
    Route::put('/superadmin/{id}', [SuperadminController::class, 'update'])->name('update');
    Route::get('/superadmin/{id}', [SuperadminController::class, 'destroy'])->name('destroy');
});

// untuk pegawai
// Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
//     Route::get('/pegawai', [PegawaiController::class, 'index']);

// });