<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = "eventi";
    protected $primaryKey = "eventoId";
    public $timestamps = true;
}
