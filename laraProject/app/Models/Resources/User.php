<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'utenteid';
    protected $guarded = ['role'];

    public $timestamps = false;
}
