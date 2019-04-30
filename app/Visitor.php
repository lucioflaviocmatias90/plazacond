<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
    public function owner()
    {
        return $this->belongsToMany("App\Owner", "visits")->withPivot('entry_date', 'departure_date', 'entry_hour', 'departure_hour', 'observation', 'id');
    }
}
