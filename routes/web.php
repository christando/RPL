<?php

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


// Route::middleware(['guest']) -> group(function (); {

// }
Route::get('/', [PageController::class, 'home']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/register', [PageController::class, 'register']);
