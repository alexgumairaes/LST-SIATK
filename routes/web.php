<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('login.dashboard', [
      "title" => "Pilih Versi Login"
    ]);
});

Route::post('/index', [LoginController::class, 'index'])->name('index');
Route::get('/login-1', [LoginController::class, 'login1'])->name('login1');
Route::get('/login-2', [LoginController::class, 'login2'])->name('login2');
Route::get('/login-3', [LoginController::class, 'login3'])->name('login3');

