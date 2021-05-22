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



Route::view('/privacy', 'privacy')
        ->name('privacy');

Route::view('/about', 'about')
        ->name('about');

Route::view('/lavora-con-noi', 'lavora-con-noi')
        ->name('lavora-con-noi');

Route::view('/termini-e-condizioni', 'termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::view('/event', 'event')->name('event');

Route::view('/modifica-dati', 'modifica-dati')->name('modifica-dati');

Route::view('/faq', 'faq')->name('faq');

Route::view('/catalog', 'catalog')->name('catalog');


