<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public function owner()
    {
        return $this->belongsToMany("App\Owner", "visits")->withPivot('entry_date', 'departure_date', 'entry_hour', 'departure_hour', 'observation', 'id');
    }
}
