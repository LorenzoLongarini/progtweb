<?php

namespace App\Models;

use App\Models\Resources\Evento;
use Illuminate\Database\Eloquent\Model;

class Biglietto extends Model
{
    protected $table = 'biglietti';
    protected $dateFormat = 'd-m-Y';
    public $timestamps = false;


    public static function getMaxDate(){
        return Biglietto::all()->max('data');
    }

    public static function bigliettiByOrg($orgId){
        $idEventi = Evento::idEventiByOrg($orgId);
        $bigliettiOrg = Biglietto::whereIn('eventoId', $idEventi)->get();
        return $bigliettiOrg;
    }
}
