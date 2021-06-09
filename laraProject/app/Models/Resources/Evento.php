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
    private $evento;

    function __construct($eventoId){
        $evento = Evento::find('eventoId', $eventoId);
    }

    public function prezzo(){
        $prezzoScontato = null;

        if($this->evento->sconto > 0){
            $prezzoScontato -= round(($prezzoScontato * $this->evento->sconto) / 100, 2);
        }

        return array(['prezzoIntero' => $this->evento->prezzo,'prezzoScontato' => $prezzoScontato]);
    }

    public static function getMaxDate(){
        return Evento::all()->max('data');
    }

    public static function idEventiByOrg($orgId){
        $idEventi = Evento::where('utenteId', $orgId)->get()->pluck('eventoId');
        return $idEventi;
    }
}
