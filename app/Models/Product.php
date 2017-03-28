<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'price_cost', 'price_resale'];
}
