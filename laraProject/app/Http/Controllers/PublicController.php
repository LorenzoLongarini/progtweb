<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Resources\Faq;
use App\Models\Resources\Evento;
use App\User;
use App\Models\Catalogo;
use App\Http\Requests\UserRequest;

class PublicController extends Controller
{

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

    public function mostraCatalogo(){
        return view('pages.catalogo')->with('eventi', Catalogo::ottieniEventiCatalogo());
    }

    public function cercaEventi(Request $request){ 
        return view('pages.catalogo')->with('eventi', Catalogo::cercaEventi($request));
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
