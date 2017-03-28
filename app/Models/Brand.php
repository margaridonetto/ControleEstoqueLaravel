<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    rotected $table = 'brand';

    public $timestamps = false;

    protected $fillable = ['name'];
}
