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

    }

    public function index() {
        return view ('pages.prova-form');
    }

    public function aggiungiEvento(){

        return view ('pages.prova-form');

    }

    /*public function modificaEvento($eventoID){
        $evento = find::($eventoID);
        return view ('modifyEvent')->with('event', $evento)

    }*/
    
    public function salvaEvento(EventRequest $request){
        //$UserId = $this->_livello3Model->getUserID();
        if ($request->hasFile('imgName')) {
            $immagine = $request->file('imgName');
            $imageName = $immagine->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        //$utenteId = 9;
        $evento = new evento;
        //$evento->fill($request->validated());
        $evento->utenteId = 9;
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
        return view('pages.prova-form');
        //return response()->action(['redirect' => route('faq')]);
        //return redirect()->action('pages.prova-form');
    }
}
