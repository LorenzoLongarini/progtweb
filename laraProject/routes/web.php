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

Route::get('/', 'PublicController@index')->name('home');

Route::view('/privacy', 'pages.privacy')->name('privacy');

Route::view('/home', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::view('/lavora-con-noi', 'pages.lavora-con-noi')
        ->name('lavora-con-noi');

Route::view('/termini-e-condizioni', 'pages.termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::view('/evento', 'pages.evento')->name('evento');

//Route::view('/modifica-dati', 'pages.modifica-dati')->name('modifica-dati');

Route::get('/faq', 'PublicController@showSiteFaqs')->name('faq');

Route::view('/catalogo', 'pages.catalogo')->name('catalogo');


/*Route::get('/livello3-insert-event','user3Controller@showInsertEvent')
        ->name('user3-insert');

Route::post('/livello3/storeEvent', 'user3Controller@storeEvent')
        ->name('user3-insert.store');*/

Route::get('/livello3/aggiungiEvento', 'Livello3Controller@index')
        ->name('aggiungiEvento');

Route::post('/livello3/aggiungiEvento', 'Livello3Controller@aggiungiEvento')
        ->name('aggiungiEvento.store');

Route::view('/filter', 'pages.prova-search')
                ->name('prova-search');

