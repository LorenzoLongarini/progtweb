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
        $prezzo = null;
        $prezzoScontato = null; $prezzoIntero = $this->evento->prezzo;

        if($this->evento->sconto > 0){
            $prezzoScontato = $prezzoIntero - round(($prezzoScontato * $this->evento->sconto) / 100, 2);
        }

        return array(['prezzoIntero' => $prezzoIntero,'prezzoScontato' => $prezzoScontato]);
    }

    public static function getMaxDate(){
        return Evento::all()->max('data');
    }

    public static function idEventiByOrg($orgId){
        $idEventi = Evento::where('utenteId', $orgId)->get()->pluck('eventoId');
        return $idEventi;
    }
}
