<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LowonganController;
use App\Http\Controllers\admin\PesertaController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\BerandaController;
use App\Http\Controllers\user\PendaftaranController;
use App\Http\Controllers\user\ProfileController as UserProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Route
Route::get('/', function () {
    return view('home');
});

Route::get('/lowongan', function () {
    return view('lowongan');
});

Route::get('/lowongan/detail', function () {
    return view('lowongan-detail');
});


// Authenticated Route
Route::middleware(['auth', 'authorization:admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/admin/peserta', [PesertaController::class, 'index']);
    Route::get('/admin/lowongan', [LowonganController::class, 'index']);
    Route::get('/admin/lowongan/add', [LowonganController::class, 'create']);
    Route::get('/admin/profile', [ProfileController::class, 'index']);
});

Route::middleware(['auth', 'authorization:user'])->group(function () {
    Route::get('/user', [BerandaController::class, 'index']);
    Route::get('/user/pendaftaran', [PendaftaranController::class, 'index']);
    Route::get('/user/profile', [UserProfileController::class, 'index']);
});

Route::view('/auth/login', 'auth.login', ['title' => 'Login'])->name('login');
Route::view('/auth/register', 'auth.register', ['title' => 'Register']);
Route::post('/auth/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
