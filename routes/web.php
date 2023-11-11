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





Route::middleware(['guest'])->group(function () {
    Route::get('/', [PageController::class, 'home']);
    Route::get('/login', [AuthController::class, 'login'])-> name('login');
    Route::post('/cek_login', [AuthController::class, 'validateLogin']);
    Route::get('/register', [PageController::class, 'register']);
    Route::post('/register_post', [PageController::class, 'post_register']);
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['preventBackHistory'])->group(function () {
        Route::middleware(['cekRole:Pengambil'])->group(function () {
            Route::get('/dashboard/pengambil', [PageController::class, 'dashboardPengambil']);
        });
        Route::middleware(['cekRole:pemilik'])->group(function () {
            Route::get('/dashboard/pemilik', [PageController::class, 'dashboardPemilik']);
        });
        Route::middleware(['cekRole:Bank'])->group(function () {
            Route::get('/dashboard/bank', [BankController::class, 'dashboard']);
        });



    //logout
    Route::get('/logout',[authController::class, 'logout']);
    });
});

