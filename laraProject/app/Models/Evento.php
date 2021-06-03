<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventi';
    protected $primaryKey = 'eventoId';
    protected $guarded = ['eventoId'];
    protected $dateFormat = 'd-m-Y';
    public $timestamps = false;

    public static function getMinDate(){
        return Evento::where('data', '>=')->min('data');
    }

    public static function getMaxDate(){
        return Evento::all()->max('data');
    }
}
