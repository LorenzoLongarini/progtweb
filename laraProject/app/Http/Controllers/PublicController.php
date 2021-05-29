<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Faq;
use App\Models\Evento;
use App\User;
use App\Http\Requests\UserRequest;

class PublicController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Restituisce un array di faq prelevate dal db tramite Eloquent ORM
     */
    public function showSiteFaqs(){
        return view('pages.faq')->with('faqs', Faq::all());
    }

    public function registraUser(){
        return view('pages.registrazione');
    }

    public function salvaUser(UserRequest $request){
        $user = new User;
        $user->nome = $request->nome;
        $user->username = $request->username;
        $user->cognome = $request->cognome;
        $user->ragioneSociale = $request->ragioneSociale;
        $user->ivaFiscale = $request->ivaFiscale;
        $user->dataNascita = $request->dataNascita;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telefono = $request->telefono;
        $user->via = $request->via;
        $user->cap = $request->cap;
        $user->città = $request->città;
        $user->save();
       // $user->fill($request->validated());
        
        return view('pages.home');

    }

    public function showCatalogo(){
        return view('pages.catalogo')->with('events', Evento::all());
    }

    public function searchForFilters(Request $request){
        $eventiFiltrati = Evento::where('titolo', 'LIKE' , '%' . $request->titolo . '%')
                        ->where('artista', 'LIKE', '%' . $request->artista . '%')
                        ->where('descrizione', 'LIKE', '%' . $request->descrizione . '%')
                        ->where('regione', 'LIKE', '%' . $request->regione . '%')
                        ->where('data', '>=', $request->data)->get(['eventoId', 'titolo', 'data', 'luogo', 'prezzo', 'imgName']);
                        
        return view('pages.catalogo')->with('events', $eventiFiltrati);
    }

    public function piuVenduti(){
        $evento = Evento::orderBy('bigliettiVenduti', 'desc')
        ->take(5)->get();
       return view('pages.home')->with('eventos', $evento);
        
    }

    public function slider(){
        $evento = Evento::where('titolo', 'LIKE', 'eventolollo')
        ->get()->first();
       return view('pages.home')->with('evento', $evento);
    }
    

    public function aBreve(){
        $evento = DB::table('users')
         ->orderBy('data', 'asc')
         ->get();
        return view('pages.home')->with('events', $evento);
    }

    

    public function mostraEvento($id){
        $evento = Evento::where('eventoId', $id)->get()->first();
        return view('pages.evento')->with('event', $evento);
    }
}
