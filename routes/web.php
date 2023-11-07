<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


// Contoh Route di Laravel 8
// Route::get('/Home', [PageController::class, 'home']);


Route::middleware(['guest'])->group(function () {
    Route::get('/', [PageController::class, 'home']);
    Route::get('/login', [PageController::class, 'login']);
    Route::get('/register', [PageController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['cekrole:pengambil'])->group(function () {
        Route::get('/dashboard/pengambil', [PageController::class, 'dashboardPengambil']);
    });
    Route::middleware(['cekrole:pemilik'])->group(function () {
        Route::get('/dashboard/pemilik', [PageController::class, 'dashboardPengambil']);
    });
    Route::middleware(['cekrole:bank'])->group(function () {
        Route::get('/dashboard/pemilik', [PageController::class, 'dashboardPengambil']);
    });
    Route::post('/logout', [AuthController::class, 'logout']);
    
});



