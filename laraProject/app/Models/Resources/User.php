<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "utenti";
    protected $primaryKey = "utenteId";
    protected $guarded = ["role"];

    public $timestamps = false;
}
