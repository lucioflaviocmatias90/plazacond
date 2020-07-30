<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
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

	protected $table = 'visitors';

	protected $fillable = [
	    'fullname',
        'rg',
        'cpf',
        'phone',
        'photo_path',
        'gender'
    ];

	protected $dates = [
	    'deleted_at'
    ];

    public function owner()
    {
        return $this->belongsToMany("App\Owner", "visits", "visitor_id", "owner_id")->withPivot('entry_date', 'departure_date', 'entry_hour', 'departure_hour', 'observation', 'id');
    }
}
