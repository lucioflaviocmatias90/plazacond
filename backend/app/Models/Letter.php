<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Letter extends Model
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
	    'title',
        'status',
        'observation',
        'apartment_id',
        'status_letter_id',
    ];

	protected $dates = [
	    'deleted_at'
    ];

    public function apartment()
    {
    	return $this->belongsTo(Apartment::class);
    }

    public function status()
    {
    	return $this->belongsTo(StatusLetter::class, 'status_letter_id');
    }
}
