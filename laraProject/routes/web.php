<?php

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

Route::view('/lavora-con-noi', function () {
    return view('welcome');
});

Route::view('/privacy', 'privacy')->name('privacy');


Route::view('/chi-siamo', function () {
    return view('welcome');
});