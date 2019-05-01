<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
	protected $fillable = ['blap', 'condition'];
	
    public function owner()
    {
    	return $this->hasOne('App\Owner');
    }
}
