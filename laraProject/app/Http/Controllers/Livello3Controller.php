<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function modificaProdotto(){

    }

    public function salvaProdotto(EventRequest $request){

        if ($request->hasFile('immagine')) {
            $immagine = $request->file('immagine');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $evento = new evento;
        $evento->fill($request->validated());
        $evento->image = $imageName;
        $evento->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };

        return redirect()->action('livello3controller@index');
    }
}
