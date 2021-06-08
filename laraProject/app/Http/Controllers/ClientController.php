<?php

namespace App\Http\Controllers;
use App\Models\Resources\Evento;

class ClientController extends Controller {

    public function __construct() {
       $this->middleware('can:isClient');
    }

public function index(){

    return view('pages.user-level2');

}

public function pagaBiglietto(){
    $acquisto = new Acquisti;
    $acquisto->utenteId = Auth::id();
    //$acquisto->eventoId = $id;
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

public function modificaClient($utenteId){
    $user = User::find($utenteId);
    return view('pages.ModificaUser')->with('user', $user);

}

public function updateClient(UserRequest $request, $utenteId){
    $cli = User::find($utenteId);
    $cli->username = $request->username;
    $cli->password = Hash::make($request->password);
    $cli->nome = $request->nome;
    $cli->cognome = $request->cognome;
    $cli->ivaFiscale = $request->ivaFiscale;
    $cli->email = $request->email;
    $cli->telefono = $request->telefono;
    $cli->via = $request->via;
    $cli->città = $request->città;
    $cli->cap = $request->cap;
    $cli->save();

    return redirect()->route('admin');
}

}