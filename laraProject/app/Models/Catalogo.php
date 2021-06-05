<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public function getAllEvents(){
        $event = Evento::all();
    }

    public function getEventsByOrg($org){
        
    }

    public function searchEvents(Filters $filters){
        
    }

    public function getSingleEvent($id){
        if($id != null)
            $event = Eventi::where('eventoId', $id)->get()->first();

        return $event;
    }
}
