<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'productImage',
        // 'category_id',
        // 'size_id'
    ];
}
