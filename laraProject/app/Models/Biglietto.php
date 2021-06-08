<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biglietto extends Model
{
    protected $table = 'biglietti';
    protected $dateFormat = 'd-m-Y';
    public $timestamps = false;


    public static function getMaxDate(){
        return Biglietto::all()->max('data');
    }
}
