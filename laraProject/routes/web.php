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

Route::get('/user-tecnico', 'TecnController@index')
->name('tecn');//->middleware('can::isTecn');

Route::get('/user-admin', 'AdminController@index')
->name('admin');//->middleware('can:isAdmin');

//prodotti
Route::get('/user-admin/insert-product', 'AdminController@inserisciProd')->name('insert-product');

Route::post('user-admin/insert-product', 'AdminController@salvaProd')->name('insert-product.store');

Route::get('user-admin/modify-prod/{productsId}', 'AdminController@modificaProd')->name('modificaProd');

Route::put('user-admin/modify-prod/{productsId}', 'AdminController@updateProd')->name('modificaProd.update');

Route::delete('user-admin/elimina-prod/{productsId}', 'AdminController@eliminaProd')->name('elimina-prodotto');

//malfunzionamenti
Route::get('/user-admin/insert-malfunction/{productsId}', 'AdminController@inserisciMalf')->name('insert-malfunction');

Route::post('user-admin/insert-malfunction/{productsId}', 'AdminController@salvaMalf')->name('insert-malfunction.store');

Route::get('user-admin/modify-malf/{malfunctionsId}', 'AdminController@modificaMalf')->name('modificaMalf');

Route::put('user-admin/modify-malf/{malfunctionsId}', 'AdminController@updateMalf')->name('modificaMalf.update');

Route::delete('user-admin/elimina-malf/{malfunctionsId}', 'AdminController@eliminaMalf')->name('elimina-malfunction');

//tecnici
Route::get('/user-admin/insert-technician', 'AdminController@inserisciTecnico')->name('insert-technician');

Route::post('user-admin/insert-technician', 'AdminController@salvaTecnico')->name('insert-technician.store');

Route::get('user-admin/modify-technician/{usersId}', 'AdminController@modificaTecnico')->name('modifica-technician');

Route::put('user-admin/modify-technician/{usersId}', 'AdminController@updateTecnico')->name('modifica-technician.update');

Route::delete('user-admin/elimina-technician/{usersId}', 'AdminController@eliminaTecnico')->name('elimina-technician');

//staff
Route::get('/user-admin/insert-staff', 'AdminController@inserisciStaff')->name('insert-staff');

Route::post('user-admin/insert-staff', 'AdminController@salvaStaff')->name('insert-staff.store');

Route::get('user-admin/modify-staff/{usersId}', 'AdminController@modificaStaff')->name('modifica-staff');

Route::put('user-admin/modify-staff/{usersId}', 'AdminController@updateStaff')->name('modifica-staff.update');

Route::delete('user-admin/elimina-staff/{usersId}', 'AdminController@eliminaStaff')->name('elimina-staff');


/*
Route::get('/user-level4/registerOrg', 'AdminController@aggiungiOrg')->name('aggiungiOrg');

Route::post('/user-level4/registerOrg', 'AdminController@salvaOrg')->name('aggiungiOrg.store');

Route::delete('user-level4/elimina-utenti2/{utenteId}', 'AdminController@eliminaUtente2')->name('eliminaUtente2');

Route::delete('user-level4/elimina-utenti3/{utenteId}', 'AdminController@eliminaUtente3')->name('eliminaUtente3');

Route::get('/user-level4/{utenteId}/modify', 'AdminController@modificaOrg')->name('modificaOrg');

Route::put('/user-level4/{utenteId}/modify', 'AdminController@updateOrg')->name('modificaOrg.update');

Route::get('/user-level2', 'ClientController@index')
->name('client');//->middleware('can:isClient');

Route::post('/user-level4', 'AdminController@organizzatoreStats')->name('organizzatoreStats');

Route::post('/user-level3', 'OrganizzatoreController@EventiStats')->name('eventiStats');
*/
Route::get('/user-staff', 'StaffController@index')
->name('staff');//->middleware('can:isStaff');
/*
Route::get('/user-level2/modify/{utenteId}', 'ClientController@modificaClient')->name('modificaClient');

Route::put('/user-level2/modify/{utenteId}', 'ClientController@updateClient')->name('modificaClient.update');
*/

// Rotte per l'autenticazione
Route::get('/login', 'Auth\LoginController@showLoginForm')
->name('login');

Route::post('/login', 'Auth\LoginController@login');

Route::post('/logout', 'Auth\LoginController@logout')
->name('logout');


Route::view('/privacy', 'pages.privacy')->name('privacy');

Route::view('/about', 'pages.about')->name('about');
Route::view('/centri-assistenza', 'pages.centriAssistenza')->name('centri');

Route::view('/lavora-con-noi', 'pages.lavora-con-noi')
        ->name('lavora-con-noi');

Route::view('/termini-e-condizioni', 'pages.termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::get('/evento/{id}/', 'PublicController@mostraProdotto')->name('evento');
/*
Route::get('/pagamento/{id}/', 'ClientController@pagaEvento')->name('pagamento');

Route::post('pagamento/{id}', 'ClientController@pagaBiglietto')->name('pagamento.store');

Route::get('/pagamento/acquisto/{id}/', 'ClientController@acquistaEvento')->name('acquisto');

Route::get('/pagamento/acquisto/confermato/{id}/', 'ClientController@acquistoConfermato')->name('confermato');

Route::get('/pagamento/acquisto/confermato/riepilogo/{id}', 'ClientController@Riepilogo')->name('riepilogo');

Route::get('/home/popolahome', 'PublicController@piuVenduti')->name('pVenduti');

Route::get('/home/slider', 'PublicController@slider')->name('slider');
*/
Route::post('/catalogo', 'PublicController@selezionaProdotti')->name('cerca');

Route::get('/faq', 'PublicController@showSiteFaqs')->name('faq');

Route::get('/catalogo', 'PublicController@mostraCatalogo')->name('catalogo');
/*
Route::get('/user-level3/aggiungiEvento', 'OrganizzatoreController@aggiungiEvento')
        ->name('aggiungiEvento');

Route::post('/user-level3/aggiungiEvento', 'OrganizzatoreController@salvaEvento')
        ->name('aggiungiEvento.store');

Route::get('/evento/{id}/modificaEvento', 'OrganizzatoreController@modificaEvento')->name('modificaEvento');

Route::put('/evento/{id}/modificaEvento', 'OrganizzatoreController@updateEvento')->name('modificaEvento.update');

Route::delete('evento/{id}', 'OrganizzatoreController@eliminaEvento')->name('eliminaEvento');

Route::get('/faq/insert', 'AdminController@inserisciFaq')->name('inserisciFaq');

Route::post('/faq/insert', 'AdminController@salvaFaq')->name('inserisciFaq.store');

Route::get('/faq/{faqId}/modify', 'AdminController@modificaFaq')->name('modificaFaq');

Route::put('/faq/{faqId}/modify', 'AdminController@updateFaq')->name('modificaFaq.update');

Route::delete('/faq/{faqId}', 'AdminController@eliminaFaq')->name('eliminaFaq');
*/
Route::get('/registrati', 'publicController@registraUser')->name('registraUser');

Route::post('/registrati', 'publicController@salvaUser')->name('registraUser.store');



Route::get('/', 'PublicController@index')->name('home');


