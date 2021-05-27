<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Evento;
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
        $user->fill($request->validated());
        
        return view('home');

    }

    public function showCatalogo(){
        return view('pages.catalogo')->with('events', Evento::all());
    }

    public function searchForFilters(Request $request){
        $eventiFiltrati = Evento::where('titolo', 'LIKE' , '%' . $request->titolo . '%')
                        ->where('artista', 'LIKE', '%' . $request->artista . '%')
                        ->where('descrizione', 'LIKE', '%' . $request->descrizione . '%')
                        ->where('regione', 'LIKE', '%' . $request->regione . '%')
                        ->where('data', '>=', $request->data)->get();
                        
        return view('pages.catalogo')->with('events', $eventiFiltrati);
    }
}
