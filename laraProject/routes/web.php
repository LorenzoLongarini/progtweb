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

Route::view('/about', 'pages.about')->name('about');

Route::view('/lavora-con-noi', 'pages.lavora-con-noi')
        ->name('lavora-con-noi');

Route::view('/termini-e-condizioni', 'pages.termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::view('/event', 'pages.event')->name('event');

//Route::view('/modifica-dati', 'pages.modifica-dati')->name('modifica-dati');

Route::get('/faq', 'PublicController@showSiteFaqs')->name('faq');

Route::view('/catalog', 'pages.catalog')->name('catalog');

Route::get('/livello2','Livello2Controller@index')
        ->name('Livello2');

Route::get('/livello2/modifydata', 'Livello2Controller@modifyData')
        ->name('modifyData');

Route::post('/livello2/storeEvent', 'Livello2Controller@storeData')
        ->name('modifyData.store');

Route::get('/livello3/aggiungiEvento', 'livello3controller@aggiungiEvento')->name('aggiungiEvento');

Route::post('/livello3/aggiungiEvento', 'livello3controller@aggiungEvento')
        ->name('aggiungiEvento.store');

