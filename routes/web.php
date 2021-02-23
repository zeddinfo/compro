<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\PmsnController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

// Route::get('/', function () {
//     return view('home.v_home');
// });

// // About
// Route::get('/about', [AboutController::class, 'c_about']);

// // route
// Route::get('/route', [RouteController::class, 'c_route']);
// Route::get('/route/informasi', [RouteController::class, 'c_informasi']);

// // pemesanan
// Route::get('/pemesanan', [PmsnController::class, 'c_pemesanan']);

Route::get('/', 'Home\HomeController@index');
