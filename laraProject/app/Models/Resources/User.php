<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'utenteId';
    protected $guarded = ['role'];

    public $timestamps = false;
}
