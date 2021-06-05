<?php

namespace App\Http\Controllers;

class ClientController extends Controller {

    public function __construct() {
       $this->middleware('can:isClient');
    }

public function index(){

    return view('pages.user-level2');

}

public function pagaBiglietto($id){
    $acquisto = new Acquisti;
    $acquisto->utenteId = Auth::id();
    $acquisto->eventoId = $id;
    $acquisto->prezzoAcquisto = $request->prezzoAcquisto;
    $acquisto->dataAcquisto = $request->dataAcquisto;
    $acquisto->save();
}

public function pagaEvento($id){
    $pagamento = Evento::where('eventoId', $id)->get()->first();
    return view('pages.pagamento')->with('pagamento', $pagamento);
}

public function acquistaEvento($id){
    $acquisto = Evento::where('eventoId', $id)->get()->first();
    return view('pages.pag-da-confermare')->with('acquisto', $acquisto);
}
public function acquistoConfermato($id){
    $confermato = Evento::where('eventoId', $id)->get()->first();
    return view('pages.pag-confermato')->with('confermato', $confermato);
}
}