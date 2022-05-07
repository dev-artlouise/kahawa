<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{   
    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $fillable = [
        'quantity',
        'description',
        'orderType'
    ];

    protected $timestamp = TRUE;
}
