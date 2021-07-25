<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Malfunction extends Model
{
    protected $table = 'malfunctions';
    protected $primaryKey = 'malfunctionsId';
    public $timestamps = false;


    public function add($malfunctionsId){
        $this->malfunctionsId = $malfunctionsId;
        $this->save();
    }
}
