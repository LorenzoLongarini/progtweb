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

   

    public function prezzo(){
        $prezzoScontato = null;

        if($this->sconto > 0){
            $prezzoScontato -= round(($prezzoScontato * $this->sconto) / 100, 2);
        }

        return array(['prezzoIntero' => $this->prezzo,'prezzoScontato' => $prezzoScontato]);
    }

    public function prezzoScont(){
        $prezzoScontato = null;

        if($this->sconto > 0){
            $prezzoScontato -= round(($prezzoScontato * $this->sconto) / 100, 2);
        }

        if($prezzoScontato == null){
            return $this->prezzo;
        }else{

        return  $prezzoScontato;
    }
    }

    public static function getMaxDate(){
        return Evento::all()->max('data');
    }

    public static function idEventiByOrg($orgId){
        $idEventi = Evento::where('utenteId', $orgId)->get()->pluck('eventoId');
        return $idEventi;
    }
}
