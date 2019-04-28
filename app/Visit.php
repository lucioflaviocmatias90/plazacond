<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['entry_date', 'entry_hour', 'departure_date', 'departure_hour', 'observation', 'owner_id', 'visitor_id', 'id'];

    protected $dates = ['entry_date', 'departure_date'];
}
