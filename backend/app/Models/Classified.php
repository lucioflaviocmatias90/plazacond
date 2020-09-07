<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classified extends Model
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
        'price',
        'description',
        'photo_path',
        'owner_id'
    ];

	protected $dates = ['deleted_at'];

    public function owner()
    {
    	return $this->belongsTo('App\Owner');
    }
}
