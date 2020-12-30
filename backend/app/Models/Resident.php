<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
	use Uuid, SoftDeletes;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

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
