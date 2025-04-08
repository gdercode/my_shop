<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'price',
        'stock_quantity'
    ];
    //
}
