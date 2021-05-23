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
    return view('home');
});

Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/event', 'event')->name('event');
Route::view('/who', 'who')->name('who');
Route::view('/modifica-dati', 'modifica-dati')->name('modifica-dati');
Route::view('/faq', 'faq')->name('faq');
Route::view('/catalog', 'catalog')->name('catalog');
