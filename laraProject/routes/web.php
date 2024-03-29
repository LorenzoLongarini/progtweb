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
Route::get('/insert-malfunction/{productsId}', 'AdminController@inserisciMalf')->name('insert-malfunction');

Route::post('/insert-malfunction/{productsId}', 'AdminController@salvaMalf')->name('insert-malfunction.store');

Route::get('/modify-malf/{malfunctionsId}', 'AdminController@modificaMalf')->name('modificaMalf');

Route::put('/modify-malf/{malfunctionsId}', 'AdminController@updateMalf')->name('modificaMalf.update');

Route::delete('/modify-malf/{malfunctionsId}', 'AdminController@eliminaMalf')->name('elimina-malfunction');

//malf staff
Route::get('/insert-malfunction-staff/{productsId}', 'StaffController@inserisciMalf')->name('insert-malfunction-staff');

Route::post('/insert-malfunction-staff/{productsId}', 'StaffController@salvaMalf')->name('insert-malfunction-staff.store');

Route::get('/modify-malf-staff/{malfunctionsId}', 'StaffController@modificaMalf')->name('modificaMalf-staff');

Route::put('/modify-malf-staff/{malfunctionsId}', 'StaffController@updateMalf')->name('modificaMalf-staff.update');

Route::delete('/modify-malf-staff/{malfunctionsId}', 'StaffController@eliminaMalf')->name('elimina-malfunction-staff');

//tecnici
Route::get('/user-admin/insert-technician', 'AdminController@inserisciTecnico')->name('insert-technician');

Route::post('/user-admin/insert-technician', 'AdminController@salvaTecnico')->name('insert-technician.store');

Route::get('/user-admin/modify-technician/{usersId}', 'AdminController@modificaTecnico')->name('modifica-technician');

Route::put('/user-admin/modify-technician/{usersId}', 'AdminController@updateTecnico')->name('modifica-technician.update');

Route::delete('user-admin/elimina-technician/{usersId}', 'AdminController@eliminaTecnico')->name('elimina-technician');

//staff
Route::get('/user-admin/insert-staff', 'AdminController@inserisciStaff')->name('insert-staff');

Route::post('user-admin/insert-staff', 'AdminController@salvaStaff')->name('insert-staff.store');

Route::get('user-admin/modify-staff/{usersId}', 'AdminController@modificaStaff')->name('modifica-staff');

Route::put('user-admin/modify-staff/{usersId}', 'AdminController@updateStaff')->name('modifica-staff.update');

Route::delete('user-admin/elimina-staff/{usersId}', 'AdminController@eliminaStaff')->name('elimina-staff');

// centri assistenza
Route::post('user-admin/insert-center', 'AdminController@salvaCentro')->name('insert-centro.store');

Route::get('/user-admin/insert-center', 'AdminController@inserisciCentro')->name('insert-center');

Route::get('user-admin/modify-center/{centerId}', 'AdminController@modificaCentro')->name('modifica-centro');

Route::put('user-admin/modify-center/{centerId}', 'AdminController@updateCentro')->name('modifica-centro.update');

Route::delete('user-admin/elimina-center/{centerId}', 'AdminController@eliminaCentro')->name('elimina-centro');


// staff
Route::get('/user-staff', 'StaffController@index')
->name('staff');//->middleware('can:isStaff');



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
        ->name('contatti');

Route::view('/termini-e-condizioni', 'pages.termini-e-condizioni')
        ->name('termini-e-condizioni');

Route::get('/prodotto/{id}', 'PublicController@mostraProdotto')->name('prodotto');

Route::get('/malfunzionamenti/{productsId}', 'PublicController@mostraMalfunzionamento')->name('malfunzionamento');
//Malf

Route::post('/malfunzionamenti-tecn/{productsId}', 'TecnController@selectMalfunction')->name('selectMalfunction-tecn');
Route::post('/malfunzionamenti-staff/{productsId}', 'StaffController@selectMalfunction')->name('selectMalfunction-staff');

Route::post('/malfunzionamenti/{productsId}', 'AdminController@selectMalfunction')->name('selectMalfunction');


//catalogo

Route::post('/catalogo', 'PublicController@selezionaProdotti')->name('cerca');

Route::get('/catalogo', 'PublicController@mostraCatalogo')->name('catalogo');

//faq

Route::get('/faq', 'PublicController@showSiteFaqs')->name('faq');

Route::get('/faq/insert', 'AdminController@inserisciFaq')->name('inserisciFaq');

Route::post('/faq/insert', 'AdminController@salvaFaq')->name('inserisciFaq.store');

Route::get('/faq/{faqId}/modify', 'AdminController@modificaFaq')->name('modificaFaq');

Route::put('/faq/{faqId}/modify', 'AdminController@updateFaq')->name('modificaFaq.update');

Route::delete('/faq/{faqId}', 'AdminController@eliminaFaq')->name('eliminaFaq');





Route::get('/', 'PublicController@index')->name('home');


