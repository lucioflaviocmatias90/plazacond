<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
	protected $fillable = ['title', 'status', 'observation', 'owner_id'];
	
    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
