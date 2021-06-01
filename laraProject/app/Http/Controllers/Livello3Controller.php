<?php

namespace App\Http\Controllers;

use App\models\Livello3;
use App\models\Evento;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Auth\LoginController;

class Livello3Controller extends Controller
{
    protected $_livello3Model;

    public function __construct(){
        $this->_livello3Model = new Livello3;
        $this->middleware('auth');

    }

    public function index() {
        return view ('pages.user-level3');
    }

    public function aggiungiEvento(){

        return view ('pages.user-level3');

    }

    /*public function modificaEvento($eventoID){
        $evento = find::($eventoID);
        return view ('modifyEvent')->with('event', $evento)

    }*/
    
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
        $evento->bigliettiDisp = $request->bigliettiDisp;
        $evento->prezzo = $request->prezzo;
        $evento->sconto = $request->sconto;
        $evento->dataSconto = $request->dataSconto;
        $evento->bigliettiVenduti = 0;
        $evento->save();

        /*if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $imageName->move($destinationPath, $imageName);
        };*/
        return view('pages.user-level3');
        //return response()->action(['redirect' => route('faq')]);
        //return redirect()->action('pages.prova-form');
    }
}
