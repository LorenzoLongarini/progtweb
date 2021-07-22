<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Malfunctions extends Model
{
    protected $table = 'malfunction';
    public $timestamps = false;


    public function add($malfunctionsId){
        $this->malfunctionsId = $malfunctionsId;
        $this->save();
    }
}
