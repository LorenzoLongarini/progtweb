<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\EventRequest;
use App\Http\Requests\ModOrgRequest;
use App\Models\Resources\Faq;
use App\Models\Resources\User;
use App\Models\Resources\Evento;
use App\Models\Statistics\OrgStats;
use App\Models\Statistics\EventoStats;
use App\Http\Controllers\Auth\LoginController;


class StaffController extends Controller {

    public function __construct() {
        //$this->middleware('can:isStaff');
    }

    public function index() {
        return view('pages.user-staff');
    }

    /*public function elencoProd(){
        
        return view('inserts.insertProduct');

    }*/
/*
    public function aggiungiEvento(){

        return view ('pages.inserisciEvento');

    }

    public function salvaEvento(EventRequest $request){
        
       
        if ($request->hasFile('imgName')) {
            $immagine = $request->file('imgName');
            $imageName = $immagine->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        
        $evento = new evento;
        $evento->utenteId = Auth::id();
        $evento->imgName = $imageName;
        $evento->titolo = $request->titolo;
        $evento->artista = $request->artista;
        $evento->regione = $request->regione;
        $evento->luogo = $request->luogo;
        $evento->data = $request->data . " " . $request->orario;
        $evento->mapsUrl = $request->mapsUrl;
        $evento->descrizione = $request->descrizione;
        $evento->programma = $request->programma;
        $evento->bigliettiTotali = $request->bigliettiTotali;
        $evento->prezzo = $request->prezzo;
        $evento->sconto = $request->sconto;
        $evento->dataSconto = $request->dataSconto;

        $evento->save();
        return redirect()->route('evento', ['id'=> $evento->eventoId]);
    }

    public function modificaEvento($eventoId){
        $event = Evento::find($eventoId);
        if(!Gate::allows('CanModificaEvento', $event)){
            return redirect()->route('home');
        }
        {
            return view ('pages.modificaEvento')->with('event', $event);
        }
    }

    public function updateEvento(EventRequest $request, $eventoId){

        if ($request->hasFile('imgName')) {
            $immagine = $request->file('imgName');
            $imageName = $immagine->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        $evento = Evento::find($eventoId);
        
        $evento->utenteId = Auth::id();
        $evento->imgName = $imageName;
        $evento->titolo = $request->titolo;
        $evento->artista = $request->artista;
        $evento->regione = $request->regione;
        $evento->luogo = $request->luogo;
        $evento->data = $request->data . " " . $request->orario;
        $evento->mapsUrl = $request->mapsUrl;
        $evento->descrizione = $request->descrizione;
        $evento->programma = $request->programma;
        $evento->bigliettiDisp = $request->bigliettiDisp;
        $evento->prezzo = $request->prezzo;
        $evento->sconto = $request->sconto;
        $evento->dataSconto = $request->dataSconto;
        $evento->save();
    
        return redirect()->route('evento', ['id'=>$eventoId]);
        
        }

        public function EliminaEvento($eventoId){
            $evento = Evento::find($eventoId);
            if(!Gate::allows('CanModificaEvento',$evento))
            {   return redirect()->route('home');}
            else{
            $evento->destroy($eventoId);
            return redirect()->route('catalogo');}
        }
        
    public function EventiStats(Request $request){
        $eventoStats = new EventoStats($request->eventoId);

        return response()->json([
            'bigliettiVenduti' => $eventoStats->bigliettiVenduti(),
            'quantitàBigliettiPerc' => $eventoStats->quantitàBigliettiPerc(),
            'incassoTotale' => $eventoStats->incassoTotale()
            ]);
    }
*/
}