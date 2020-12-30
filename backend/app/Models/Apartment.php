<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use Uuid;

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
	    'blap',
        'condition_id'
    ];

    public function owner()
    {
    	return $this->hasMany(Owner::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }
}
