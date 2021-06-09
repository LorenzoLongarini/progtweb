<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Partecipazioni extends Model
{
    protected $table = 'partecipazioni';
    public $timestamps = false;


    public function add($eventoId, $utenteId){
        $this->eventoId = $eventoId;
        $this->utenteId = $utenteId;
        $this->save();
    }

    public static function numPartEvento($eventoId){
        $eventoPartecipazioni = Partecipazioni::where('eventoId', $eventoId)->get();
        return count($eventoPartecipazioni);
    }
}
