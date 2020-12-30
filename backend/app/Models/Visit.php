<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'entry_date',
        'entry_hour',
        'departure_date',
        'departure_hour',
        'observation',
        'owner_id',
        'visitor_id'
    ];

    protected $dates = [
        'entry_date',
        'departure_date'
    ];
}
