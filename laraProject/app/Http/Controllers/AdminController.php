<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {

    public function __construct() {
        //$this->middleware('can:isAdmin');
        
    }

public function index(){

    return view('pages.user-level4');

}

    public function inserisciFaq(){
        return view ('pages.inserisciFaq');
    }

    public function salvaFaq(FaqRequest $request){
        $faq = new Faq;
        $faq->domanda = $request->domanda;
        $faq->risposta = $request->risposta;
        $faq->save();

        return view('faq');
    }

}