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

Route::get('/korashop', function () {
    return view('korashop');
});

Route::get('/geotagging', function () {
    return view('geotagging');
});

Route::get('/simatalia', function () {
    return view('tanalia');
});

Route::get('/gasturah', function () {
    return view('gasturah');
});

Route::get('/vablik', function () {
    return view('vablik');
});

Route::get('/valans', function () {
    return view('valans');
});
