<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustauthController;
use App\Http\Controllers\CommentController;
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

Route::get('/', function () {
    return view('auth.index');
});
Route::get('/index', [CustauthController::class, 'index']);
Route::post('/register-user', [CustauthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustauthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustauthController::class, 'dashboard'])->middleware('isloggedIn');
Route::post('/register-user', [CustauthController::class, 'registerUser'])->name('register-user');
Route::get('/profile', [CustauthController::class, 'profile']);
Route::post('/user-file', [CustauthController::class, 'fileUser'])->name('user-file');
Route::get('/logout', [CustauthController::class, 'logout']);
Route::get('delete/{id}', [CustauthController::class, 'destroy']);
Route::get('/details/{id}', [CustauthController::class, 'details'])->name('details');
Route::post('/addcomment-user', [CommentController::class, 'addcomment'])->name('addcomment-user');
