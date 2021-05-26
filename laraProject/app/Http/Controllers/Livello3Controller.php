<?php

namespace App\Http\Controllers;

use App\models\Livello3;
use App\models\Evento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

class Livello3Controller extends Controller
{
    protected $_livello3Model;

    /*public function __construct(){
        $this->_livello3Model = new livello_3;

    }*/

    public function index() {
        return view ('pages.prova-form');
    }

    /*public function aggiungiProdotto(){

        return view ('aggiungiProdotto');

    }*/

    public function modificaEvento(){

    }

    public function aggiungiEvento(EventRequest $request){

        if ($request->hasFile('img_name')) {
            $immagine = $request->file('img_name');
            $imageName = $immagine->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $evento = new evento;
        $evento->fill($request->validated());
        $evento->imgName = $imageName;
        $evento->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };

        return redirect()->action('livello3controller@index');
    }
}
