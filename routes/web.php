<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BankController;

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



// Route::get('/', function () {
//     return view('welcome');
// });

// Contoh Route di Laravel 8
// Route::get('/Home', [PageController::class, 'home']);



Route::middleware(['guest'])->group(function () {
    Route::get('/', [PageController::class, 'home']);
    Route::get('/login', [PageController::class, 'login'])-> name('login');
    Route::post('/login', [AuthController::class, 'validateLogin']);
    Route::get('/register', [PageController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['preventBackHistory'])->group(function () {
        Route::middleware(['cekRole:pengambil'])->group(function () {
            Route::get('/dashboard/pengambil', [PageController::class, 'dashboardPengambil']);
        });
        Route::middleware(['cekRole:pemilik'])->group(function () {
            Route::get('/dashboard/pemilik', [PageController::class, 'dashboardPemilik']);
        });
        Route::middleware(['cekRole:bank'])->group(function () {
            Route::get('/dashboard/bank', [BankController::class, 'dashboard']);
        });
       
  

    //logout
    Route::get('/logout',[authController::class, 'logout']);
    });
});

