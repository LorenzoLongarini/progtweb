<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventi";
    protected $primaryKey = "eventoId";
    protected $guarded = ['prodId'];
    public $timestamps = false;
}
