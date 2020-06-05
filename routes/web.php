<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/blue', function () {
    return view('blue');
});
Route::get('/silver', function () {
    return view('silver');
});
Route::get('/gold', function () {
    return view('gold');
});
Route::get('/blue-box', function () {
    return view('b_blue');
});
Route::get('/silver-box', function () {
    return view('b_silver');
});
Route::get('/gold-box', function () {
    return view('b_gold');
});
Route::get('/order-succes', function () {
    return view('succes');
});

