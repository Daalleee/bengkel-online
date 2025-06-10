<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bengkel extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'latidude',
        'longtude',
        'description',
        'opening_time',
        'closing_time',

    ];
}
