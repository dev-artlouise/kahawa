<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'size',
        'price',
    ];
    
    protected $timestamp = TRUE;
}
