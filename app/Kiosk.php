<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiosk extends Model
{
    protected $fillable = ['date_marked', 'date_delivery', 'status', 'observation', 'owner_id'];

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
