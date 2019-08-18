<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
	use SoftDeletes;

	protected $fillable = [
	    'fullname',
        'photo_path',
        'rg',
        'cpf',
        'gender',
        'birthday',
        'phone',
        'resident_type_id',
        'owner_id'
    ];

	protected $dates = ['deleted_at'];

    public function owner()
    {
    	return $this->belongsTo(Owner::class, 'resident_id');
    }
}
