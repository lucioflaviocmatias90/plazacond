<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
	use SoftDeletes;

	protected $fillable = [
	    'brand',
        'model',
        'type_vehicle',
        'vehicle_color',
        'vehicle_plate',
        'owner_id'
    ];

	protected $dates = [
	    'deleted_at'
    ];

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
