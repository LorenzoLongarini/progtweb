<?php

namespace App\Models\Statistics;

use App\Models\Resources\Evento;
use App\Models\Resources\Biglietto;
use Illuminate\Database\Eloquent\Model;

class EventoStats
{
    private $evento;

    function __construct($eventoId){
        $this->evento = Evento::where('eventoId', $eventoId)->get()->first();
    }

    public function bigliettiVenduti(){
        return $this->evento->bigliettiVenduti;
    }

    public function incassoTotale(){
        $incassoTotale = 0;
        $biglietti = Biglietto::where('eventoId', $this->evento->eventoId)->get()->pluck(['prezzoAcquisto']);

        foreach($biglietti as $prezzoAcquisto){
            $incassoTotale += $prezzoAcquisto;
        }

        return $incassoTotale;
    }

    public function quantitàBigliettiPerc(){
        
        return $percVendita = round(($this->evento->bigliettiVenduti * 100) / $this->evento->bigliettiTotali, 2);
    }
}
