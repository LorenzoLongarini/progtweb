<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventi';
    protected $primaryKey = 'eventoId';
    protected $guarded = ['eventoId'];
    protected $dateFormat = 'd-m-Y';
    public $timestamps = false;

    public static function getMinDate(){
        return Evento::where('data', '>=', date('d-m-Y'))->min('data');
    }

    public static function getMaxDate(){
        return Evento::all()->max('data');
    }

    public static function idEventiByOrg($orgId){
        $idEventi = Evento::where('utenteId', $orgId)->get()->pluck('eventoId');
        return $idEventi;
    }
}
