<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
	use SoftDeletes;

	protected $fillable = ['title', 'description', 'owner_id'];

	protected $dates = ['deleted_at'];

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
