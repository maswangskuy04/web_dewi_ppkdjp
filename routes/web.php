<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaPelatihanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::post('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('/user', UserController::class);
    Route::resource('/level', LevelController::class);
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/peserta-pelatihan', PesertaPelatihanController::class);
    Route::resource('/gelombang', GelombangController::class);
});
