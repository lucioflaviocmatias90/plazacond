<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
	protected $fillable = ['brand', 'model', 'type_vehicle', 'vehicle_color', 'vehicle_plate', 'owner_id'];

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
