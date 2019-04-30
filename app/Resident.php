<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
	use SoftDeletes;

	protected $fillable = ['fullname', 'photo_path', 'rg', 'cpf', 'gender', 'birthday', 'phone', 'resident_type', 'owner_id'];

	protected $dates = ['deleted_at'];

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
