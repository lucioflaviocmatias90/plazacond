<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
	protected $fillable = ['blap', 'condition_id'];
	
    public function owner()
    {
    	return $this->hasOne(Owner::class);
    }

    public function condition()
    {
        return $this->belongsTo(ConditionApartment::class, 'condition_id');
    }
}
