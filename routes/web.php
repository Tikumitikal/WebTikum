<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiReservasiController;
use App\Http\Controllers\ApiContactController;

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
//     return view('index');
// });

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/menu', function () {
    return view('landing.menu');
});

Route::get('/contact', function () {
    return view('landing.contact');
});

Route::get('/login', function () {
    return view('landing.login');
});

Route::get('/about', function () {
    return view('landing.about');
});

Route::post('register',[ApiAuthController::class,'register']);
Route::post('login',[ApiAuthController::class,'login']);

Route::post('store',[ApiContactController::class],'store');
