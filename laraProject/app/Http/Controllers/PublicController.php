<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Resources\Faq;
use App\Models\Resources\Evento;
use App\Models\Resources\User;
use App\Models\Catalogo;
use App\Http\Requests\UserRequest;
use App\Http\Requests\SearchRequest;
use App\Models\Resources\Product;

class PublicController extends Controller
{

    public function __construct()
    {

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prodotti= Catalogo::listaProdotti();
        return view('pages.home')->with('prodotti',$prodotti);
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
        //s$user->ragioneSociale = $request->ragioneSociale;
        $user->ivaFiscale = $request->ivaFiscale;
        $user->dataNascita = $request->dataNascita;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telefono = $request->telefono;
        $user->via = $request->via;
        $user->cap = $request->cap;
        $user->città = $request->città;
        $user->save();
        
        return redirect()->route('home');

    }

    public function mostraCatalogo(){
        return view('pages.catalogo')->with('prodotti', Catalogo::listaProdotti());
    }

    public function selezionaProdotti(SearchRequest $request){ 
        return view('pages.catalogo')->with('prodotti', Catalogo::ricercaPerDescrizione($request));
    }

    public function mostraProdotto($id){
        $prodotto = Product::where('productsId', $id)->get()->first();
        if(is_null($prodotto)){
            return redirect()->route('home');
        }
        else{
        return view('pages.evento')->with('prodotto', $prodotto);}
    }

  
}
