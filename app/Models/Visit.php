<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'token',
        'ip_address',
        'user_agent',
        'browser',
        'platform',
        'device',
        'latitude',
        'longitude',
        'accuracy',
        'consent_given',
        'accessed_at',
    ];

    protected $casts = [
        'consent_given' => 'boolean',
        'accessed_at' => 'datetime',
        'latitude' => 'float',
        'longitude' => 'float',
        'accuracy' => 'float',
    ];
}
