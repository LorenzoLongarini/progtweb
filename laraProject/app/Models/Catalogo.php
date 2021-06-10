<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Http\Requests\RicercaRequest;
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
        return self::ottieniEventiAsQuery($stato)->orderBy('data', 'ASC')->get();
    }

    public static function cercaEventi(RicercaRequest $request){
        $risultatiRicerca = self::ottieniEventiAsQuery()
                        ->where('titolo', 'LIKE' , '%' . $request->titolo . '%')
                        ->join('users', 'eventi.utenteId', '=', 'users.utenteId')
                        ->where('users.ragioneSociale','LIKE', '%' . $request->organizzatore . '%')
                        ->where('descrizione', 'LIKE', '%' . $request->descrizione . '%')
                        ->where('regione', 'LIKE', '%' . $request->regione . '%')
                        ->where('data', '>=', $request->data)->orderBy('data', 'ASC')->get();
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
