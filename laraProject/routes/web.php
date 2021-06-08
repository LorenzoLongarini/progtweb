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

Route::get('/user-level4/registerOrg', 'AdminController@aggiungiOrg')->name('aggiungiOrg');

Route::post('/user-level4/registerOrg', 'AdminController@salvaOrg')->name('aggiungiOrg.store');

Route::get('user-level4/elimina-utenti2/{utenteId}', 'AdminController@eliminaUtente2')->name('eliminaUtente2');

Route::delete('user-level4/elimina-utenti3/{utenteId}', 'AdminController@eliminaUtente3')->name('eliminaUtente3');

Route::get('/user-level4/modify/{utenteId}', 'AdminController@modificaOrg')->name('modificaOrg');

Route::put('/user-level4/modify/{utenteId}', 'AdminController@updateOrg')->name('modificaOrg.update');

Route::post('/user-level4', 'AdminController@stats')->name('stats');

Route::get('/user-level2', 'ClientController@index')
->name('client');//->middleware('can:isClient');

// Rotte per l'autenticazione
Route::get('/login', 'Auth\LoginController@showLoginForm')
->name('login');

Route::post('/login', 'Auth\LoginController@authenticate');

Route::post('/logout', 'Auth\LoginController@logout')
->name('logout');


Route::view('/privacy', 'pages.privacy')->name('privacy');

Route::view('/about', 'pages.about')->name('about');

Route::view('/lavora-con-noi', 'pages.lavora-con-noi')
        ->name('lavora-con-noi');

Route::view('/termini-e-condizioni', 'pages.termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::get('/evento/{id}/', 'PublicController@mostraEvento')->name('evento');

Route::get('/pagamento/{id}/', 'ClientController@pagaEvento')->name('pagamento');

Route::post('pagamento/', 'ClientController@pagaBiglietto')->name('pagamento.store');

Route::get('/pagamento/acquisto/{id}/', 'ClientController@acquistaEvento')->name('acquisto');

Route::get('/pagamento/acquisto/confermato/{id}/', 'ClientController@acquistoConfermato')->name('confermato');

Route::get('/home/popolahome', 'PublicController@piuVenduti')->name('pVenduti');

Route::get('/home/slider', 'PublicController@slider')->name('slider');

Route::post('/catalogo/cerca', 'PublicController@cercaEventi')->name('cerca');

Route::get('/faq', 'PublicController@showSiteFaqs')->name('faq');

Route::view('/catalogo', 'PublicController@mostraEventi')->name('catalogo');

Route::get('/livello3/aggiungiEvento', 'Livello3Controller@aggiungiEvento')
        ->name('aggiungiEvento');

Route::post('/livello3/aggiungiEvento', 'Livello3Controller@salvaEvento')
        ->name('aggiungiEvento.store');

Route::get('/evento/{id}/modify', 'Livello3Controller@modificaEvento')->name('modificaEvento');

Route::put('/evento/{id}/modify', 'Livello3Controller@updateEvento')->name('modificaEvento.update');

Route::delete('evento/{id}', 'Livello3Controller@eliminaEvento')->name('eliminaEvento');

Route::get('/faq/insert', 'AdminController@inserisciFaq')->name('inserisciFaq');

Route::post('/faq/insert', 'AdminController@salvaFaq')->name('inserisciFaq.store');

Route::get('/faq/{faqId}/modify', 'AdminController@modificaFaq')->name('modificaFaq');

Route::put('/faq/{faqId}/modify', 'AdminController@updateFaq')->name('modificaFaq.update');

Route::delete('/faq/{faqId}', 'AdminController@eliminaFaq')->name('eliminaFaq');



Route::get('/registrati', 'publicController@registraUser') ->name('registraUser');

Route::post('/registrati', 'publicController@salvaUser') ->name('registraUser.store');


Auth::routes();

Route::get('/', 'publicController@index')->name('home');

