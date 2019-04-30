<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kiosk extends Model
{
	use SoftDeletes;

    protected $fillable = ['date_marked', 'date_delivery', 'status', 'observation', 'owner_id'];

    protected $dates = ['deleted_at'];

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
