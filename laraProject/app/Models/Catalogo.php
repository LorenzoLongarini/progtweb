<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Evento;

class Catalogo extends Model
{
    public static function mostraCatalogo(){
        $eventi = Evento::where('stato', 'attivo')->get();
        return $eventi;
    }

    public static function cercaEventi(Request $request){
        $risultatiRicerca = Evento::where('titolo', 'LIKE' , '%' . $request->titolo . '%')
                        ->where('artista', 'LIKE', '%' . $request->artista . '%')
                        ->where('descrizione', 'LIKE', '%' . $request->descrizione . '%')
                        ->where('regione', 'LIKE', '%' . $request->regione . '%')
                        ->where('data', '>=', $request->data)->get();
        return $risultatiRicerca;
    }


    public static function mostraEvento($id){
        if($id != null)
            $evento = Event::where('eventoId', $id)->get()->first();
        return $evento;
    }
}
