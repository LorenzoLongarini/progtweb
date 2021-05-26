<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

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

    public function registraUser(){
        return view('insert.registerUser');
    }

    public function salvaUser(UserRequest $request){
        $user = new User;
        $user->username = $request->username;
       // $user->password = Hash::make($request->password);
        $user->nome=$request->nome;
        $user->cognome=$request->cognome;
        $user->ragioneSociale=$request->ragioneSociale;
        $user->ivaFiscale=$request->ivaFiscale;
        $user->dataNascita=$request->dataNascita;
        $user->email=$request->email;
        $user->telefono=$request->telefono;
        $user->via=$request->via;
        $user->cap=$request->cap;
        $user->città=$request->città;
        $user->livello='cliente';
        $user->save();

        
    }

    /**
     * Restituisce un array di faq prelevate dal db tramite Eloquent ORM
     */
    public function showSiteFaqs(){
        $faqs = new Faq;
        return view('pages.faq')->with('faqs', $faqs::all());
    }
}
