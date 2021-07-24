<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Product;
use App\Models\Resources\User;

class Catalogo extends Model
{
    public static function verificaDescrizione($descrizione){
       $counter= substr_count($descrizione,"*");
       if($counter <= 1)
       {
           if($counter==1)
           {
               if((strlen($descrizione)-1)=="*")
               {
                    return str_replace("*","",$descrizione);
               }
           }else return $descrizione;
           
       }else return null;
       
       

       

    }
    public static function listaProdotti(){
        $prodotti = Product::all();
        return $prodotti;
    }

    public static function ricercaPerDescrizione(SearchRequest $request){
        $desc= self::verificaDescrizione($request->descrizione);
        $risultati=Product::all()
                    ->where('descrizione','LIKE','%' . $desc . '%');
        return $risultati;

      



    }











    /*
    public static function ottieniEventiAsQuery($stato = "attivo"){
        $eventi = Product::where('statoEvento', $stato);
        return $eventi;
    }

    public static function ottieniEventiCatalogo($stato = "attivo"){
        return self::ottieniEventiAsQuery($stato)->orderBy('data', 'ASC')->simplePaginate(5);
    }

    public static function cercaEventi(RicercaRequest $request){
        $risultatiRicerca = self::ottieniEventiAsQuery()
                        ->where('titolo', 'LIKE' , '%' . $request->titolo . '%')
                        ->join('users', 'eventi.utenteId', '=', 'users.utenteId')
                        ->where('users.ragioneSociale','LIKE', '%' . $request->organizzatore . '%')
                        ->where('descrizione', 'LIKE', '%' . $request->descrizione . '%')
                        ->where('regione', 'LIKE', '%' . $request->regione . '%')
                        ->where('data', '>=', $request->data)->orderBy('data', 'ASC')->simplePaginate(5);
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
    */
}
