<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/admin', function() {
    return view('admin');
});

Route::get('thanks', function () {
    return view('thanks');
});

// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/register', function () {
    return view('auth.register');
});