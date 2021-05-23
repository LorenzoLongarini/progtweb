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

Route::view('/privacy', 'pages.privacy')->name('privacy');

Route::view('/home', 'pages.home')->name('home');

Route::view('/about', 'pages.about')
        ->name('about');

Route::view('/lavora-con-noi', 'pages.lavora-con-noi')
        ->name('lavora-con-noi');

Route::view('/termini-e-condizioni', 'pages.termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::view('/event', 'pages.event')->name('event');

Route::view('/modifica-dati', 'pages.modifica-dati')->name('modifica-dati');

Route::view('/faq', 'pages.faq')->name('faq');

Route::view('/catalog', 'pages.catalog')->name('catalog');

Route::get('/livello3','Livello3Controller')->name('Livello3');

Route::get('/livello3/newEvent', 'Livello3Controller@addEvent')->name('newevent');

Route::post('/livello3/storeEvent', 'Livello3Controller@storeEvent')->name('newevent.store');



