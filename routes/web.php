<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaPelatihanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserJurusanController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('/', WelcomeController::class);

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
    Route::post('/peserta-pelatihan/update-status/{id}', [PesertaPelatihanController::class, 'updateStatus']);
    Route::resource('/gelombang', GelombangController::class);
    Route::post('/gelombang/update-status/{id}', [GelombangController::class, 'updateStatus']);
    Route::resource('/user-jurusan', UserJurusanController::class);
});
