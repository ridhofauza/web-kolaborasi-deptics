<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

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
    return view('welcome');
});

Route::get('/coba', [CobaController::class, 'index']);
Route::get('/cobaregister', function () {
    return view('register');
});
Route::get('/cobalogin', function () {
    return view('login');
});
Route::post('/prosesregister', [CobaController::class, 'prosesregister']);
Route::post('/proseslogin', [CobaController::class, 'proseslogin']);
