<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Evento;
use App\Models\Resources\User;

class Catalogo extends Model
{
    public static function ottieniEventiAsQuery($stato = "attivo"){
        $eventi = Evento::where('statoEvento', $stato);
        return $eventi;
    }

    public static function ottieniEventiCatalogo($stato = "attivo"){
        return self::ottieniEventiAsQuery($stato)->get();
    }

    public static function cercaEventi(Request $request){
        $risultatiRicerca = self::ottieniEventiAsQuery()
                        ->where('titolo', 'LIKE' , '%' . $request->titolo . '%')
                        ->where('utenteId', $request->organizzatore)
                        ->where('descrizione', 'LIKE', '%' . $request->descrizione . '%')
                        ->where('regione', 'LIKE', '%' . $request->regione . '%')
                        ->where('data', '>=', $request->data)->get();
        return $risultatiRicerca;
    }

    public static function mostraEvento($id){
        if($id != null)
            $evento = self::ottieniEventiAsQuery()->where('eventoId', $id)->only();
        return $evento;
    }

    public static function listaOrganizzatori(){
        $availableId = self::ottieniEventiCatalogo()->pluck('utenteId')->unique()->toArray();
        $orgsList = User::whereIn('utenteId', $availableId)->get()->pluck('ragioneSociale', 'utenteId');
        return $orgsList;
    }
}
