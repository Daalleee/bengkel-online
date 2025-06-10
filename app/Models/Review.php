<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'bengkel_id',
        'rating',
        'comment',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bengkel(): BelongsTo
    {
        return $this->belongsTo(Bengkel::class);
    }
}
