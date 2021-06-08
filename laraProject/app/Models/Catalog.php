<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Event;

class Catalog extends Model
{
    public function getAllEvents(){
        $event = Evento::all();
    }

    public function getEventsByOrg($org){
        
    }

    public function searchEvents($request){
        
    }

    public function getSingleEvent($id){
        if($id != null)
            $event = Event::where('eventoId', $id)->get()->first();

        return $event;
    }
}
