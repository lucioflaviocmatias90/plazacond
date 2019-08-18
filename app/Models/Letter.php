<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Letter extends Model
{
	use SoftDeletes;

	protected $fillable = [
	    'title',
        'status',
        'observation',
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
