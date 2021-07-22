<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productsId';
    protected $guarded = ['productsId'];
    protected $dateFormat = 'd-m-Y';
    public $timestamps = false;
    private $products;


}
