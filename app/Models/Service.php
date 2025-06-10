<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'user_id',
        'bengkel_id',
        'type',
        'service_type',
        'description',
        'status',
        'latitude',
        'longtude',
    ];
}
