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

Route::delete('user-admin/elimina-malf/{malfunctionsId}/{productsId}', 'AdminController@eliminaMalf')->name('elimina-malfunction');

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

// staff
Route::get('/user-staff', 'StaffController@index')
->name('staff');//->middleware('can:isStaff');

//Route::get('/user-staff/all-products', 'StaffController@elencoProd')->name('all-products');
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

Route::get('/prodotto/{id}', 'PublicController@mostraProdotto')->name('prodotto');

Route::get('/malfunzionamenti/{productsId}', 'PublicController@mostraMalfunzionamento')->name('malfunzionamento');

Route::post('/malfunzionamenti', 'AdminController@selectMalfunction')->name('selectMalfunction');


//catlogo

Route::post('/catalogo', 'PublicController@selezionaProdotti')->name('cerca');

Route::get('/catalogo', 'PublicController@mostraCatalogo')->name('catalogo');

//faq

Route::get('/faq', 'PublicController@showSiteFaqs')->name('faq');

Route::get('/faq/insert', 'AdminController@inserisciFaq')->name('inserisciFaq');

Route::post('/faq/insert', 'AdminController@salvaFaq')->name('inserisciFaq.store');

Route::get('/faq/{faqId}/modify', 'AdminController@modificaFaq')->name('modificaFaq');

Route::put('/faq/{faqId}/modify', 'AdminController@updateFaq')->name('modificaFaq.update');

Route::delete('/faq/{faqId}', 'AdminController@eliminaFaq')->name('eliminaFaq');

//registrazione

Route::get('/registrati', 'publicController@registraUser')->name('registraUser');

Route::post('/registrati', 'publicController@salvaUser')->name('registraUser.store');



Route::get('/', 'PublicController@index')->name('home');


