<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

Route::post('/', [AuthController::class, 'modify']);

Route::post('/confirm', [AuthController::class, 'confirm']);

Route::get('/admin', [ContactController::class, 'index']);

Route::get('/admin/search', [ContactController::class, 'search']);

Route::post('/thanks', [AuthController::class, 'store']);

Route::get('/register', function () {
    return view('auth.register');
});