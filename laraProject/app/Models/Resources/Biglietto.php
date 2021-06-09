<?php

namespace App\Models\Resources;

use App\Models\Resources\Evento;
use Illuminate\Database\Eloquent\Model;

class Biglietto extends Model
{
    protected $table = 'biglietti';
    protected $dateFormat = 'd-m-Y';
    public $timestamps = false;

}
