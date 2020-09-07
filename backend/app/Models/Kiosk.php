<?php

namespace App\Models;

use App\Traits\Uuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kiosk extends Model
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
        'date_marked',
        'date_delivery',
        'status',
        'observation',
        'owner_id'
    ];

    protected $dates = [
        'date_marked',
        'date_delivery',
        'deleted_at',
    ];

    ## MUTATORS

    public function getDateMarkedAttribute()
    {
        return Carbon::parse($this->attributes['date_marked'])->format('d/m/Y');
    }

    public function getDateDeliveryAttribute()
    {
        return Carbon::parse($this->attributes['date_delivery'])->format('d/m/Y');
    }

    ## ACCESSORS

    public function setDateMarkedAttribute($date_marked)
    {
        $date_parts = explode('/', $date_marked);
        $this->attributes['date_marked'] =  "{$date_parts[2]}-{$date_parts[1]}-{$date_parts[0]}";
    }

    public function setDateDeliveryAttribute($date_delivery)
    {
        $date_parts = explode('/', $date_delivery);
        $this->attributes['date_delivery'] =  "{$date_parts[2]}-{$date_parts[1]}-{$date_parts[0]}";
    }

    ## RELATIONS

    public function owner()
    {
    	return $this->belongsTo(Owner::class);
    }
}
