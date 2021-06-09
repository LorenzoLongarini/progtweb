<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Resources\Evento;
use App\Models\Resources\Partecipazioni;
use App\Http\Requests\ModUserRequest;
use App\Models\User;

class ClientController extends Controller {

    public function __construct() {
       $this->middleware('can:isClient');
    }

public function index(){

    return view('pages.user-level2');

}

public function pagaBiglietto(){
    $acquisto = new Biglietto;
    $acquisto->utenteId = Auth::id();
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

public function modificaClient(){
    return view('pages.ModificaUser');

}

public function updateClient(UserRequest $request){
    $cli = Auth::user(); 
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

    public static function partecipaEvento(Request $request){
        $partUtente = Partecipazioni::where(['eventoId' => $request->eventoId,'utenteId' => $request->utenteId])->get()->first();

        if($partUtente != null){
            Partecipazioni::where(['eventoId' => $partUtente->eventoId,'utenteId' => $partUtente->utenteId])->delete();
        }
        else{
            $partecipazione = new Partecipazioni();
            $partecipazione->add($request->eventoId, $request->utenteId);
        }
        
        return response()->json(['partecipazioni' => Partecipazioni::numPartEvento($request->eventoId)]);
    }
}