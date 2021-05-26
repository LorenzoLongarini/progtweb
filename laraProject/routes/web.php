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

Route::get('/organizzatore', 'OrganizzatoreController@index')
->name('organiz');

Route::get('/admin', 'AdminController@index')
->name('admin');//->middleware('can:isAdmin');

Route::get('/client', 'ClientController@index')
->name('client');//->middleware('can:isClient');

// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
->name('login');

Route::post('login', 'Auth\LoginController@authenticate');

Route::post('logout', 'Auth\LoginController@logout')
->name('logout');






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


/*Route::get('/livello3-insert-event','user3Controller@showInsertEvent')
        ->name('user3-insert');

Route::post('/livello3/storeEvent', 'user3Controller@storeEvent')
        ->name('user3-insert.store');*/

Route::get('/livello3/aggiungiEvento', 'Livello3Controller@index')
        ->name('aggiungiEvento');

Route::post('/livello3/aggiungiEvento', 'Livello3Controller@aggiungEvento')
        ->name('aggiungiEvento.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
