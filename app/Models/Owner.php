<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fullname',
        'birthday',
        'email',
        'rg',
        'cpf',
        'gender',
        'phone',
        'photo_path',
        'observation',
        'apartment_id'
    ];

    protected $dates = [
        'birthday',
        'deleted_at',
    ];

    protected $relations = [
        'apartment',
        'resident',
        'classified',
        'kiosk',
        'letter',
        'vehicle',
        'notice',
        'visitor',
    ];

    ## MUTATORS

    public function getBirthdayAttribute()
    {
        return Carbon::parse($this->attributes['birthday'])->format('d/m/Y');
    }

    ## ACCESSORS

    public function setBirthdayAttribute($birthday)
    {
        $date_parts = explode('/', $birthday);
        $this->attributes['birthday'] =  "{$date_parts[2]}-{$date_parts[1]}-{$date_parts[0]}";
    }

    ## RELATIONS

    public function apartment()
    {
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }
    
    public function resident()
    {
    	return $this->hasMany('App\Models\Resident');
    }

    public function classified()
    {
    	return $this->hasMany('App\Models\Classified');
    }

    public function kiosk()
    {
    	return $this->hasMany('App\Models\Kiosk');
    }

    public function letter()
    {
    	return $this->hasMany('App\Models\Letter');
    }

    public function vehicle()
    {
    	return $this->hasMany('App\Models\Vehicle');
    }

    public function notice()
    {
        return $this->hasMany('App\Models\Notice');
    }

    public function visitor()
    {
        return $this->belongsToMany("App\Models\Visitor", "visits")->withPivot('created_at');
    }
}
