<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'id';

    protected $fillable = [
        'remarks',
    ];

    protected $timestamp = TRUE;
}
