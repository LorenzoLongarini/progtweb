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

Route::get('/user-level3', 'OrganizzatoreController@index')
->name('organiz');

Route::get('/user-level4', 'AdminController@index')
->name('admin');//->middleware('can:isAdmin');

Route::get('/user-level2', 'ClientController@index')
->name('client');//->middleware('can:isClient');

// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
->name('login');

Route::post('login', 'Auth\LoginController@authenticate');

Route::post('logout', 'Auth\LoginController@logout')
->name('logout');

Route::get('/', function () {
    return view('pages.home')->name('home');
});

Route::view('/privacy', 'pages.privacy')->name('privacy');

Route::view('/home', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::view('/lavora-con-noi', 'pages.lavora-con-noi')
        ->name('lavora-con-noi');

Route::view('/termini-e-condizioni', 'pages.termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::view('/evento', 'pages.evento')->name('evento');

//Route::view('/modifica-dati', 'pages.modifica-dati')->name('modifica-dati');

Route::post('/catalogo/cerca', 'PublicController@searchForFilters')->name('cerca');

Route::get('/faq', 'PublicController@showSiteFaqs')->name('faq');

Route::view('/catalogo', 'pages.catalogo')->name('catalogo');


/*Route::get('/livello3-insert-event','user3Controller@showInsertEvent')
        ->name('user3-insert');

Route::post('/livello3/storeEvent', 'user3Controller@storeEvent')
        ->name('user3-insert.store');*/

Route::get('/livello3/aggiungiEvento', 'Livello3Controller@aggiungiEvento')
        ->name('aggiungiEvento');

Route::post('/livello3/aggiungiEvento', 'Livello3Controller@salvaEvento')
        ->name('aggiungiEvento.store');

route::get('/registrati', 'publicController@registraUser') ->name('registraUser');

route::post('/registrati', 'publicController@salvaUser') ->name('registraUser.store');

Auth::routes();

Route::get('/home', 'publicController@index')->name('home');
