<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bengkel extends Model
{
    protected $table = 'bengkels'; // pastikan sesuai nama tabel di migration

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'latitude',
        'longitude',
        'description',
        'opening_time',
        'closing_time',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'opening_time' => 'datetime:H:i:s',
        'closing_time' => 'datetime:H:i:s',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
