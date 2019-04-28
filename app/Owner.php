<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function resident()
    {
    	return $this->hasMany('App\Resident');
    }

    public function classified()
    {
    	return $this->hasMany('App\Classified');
    }

    public function kiosk()
    {
    	return $this->hasMany('App\Kiosk');
    }

    public function letter()
    {
    	return $this->hasMany('App\Letter');
    }

    public function vehicle()
    {
    	return $this->hasMany('App\Vehicle');
    }

    public function notice()
    {
        return $this->hasMany('App\Notice');
    }

    public function visitor()
    {
        // return $this->belongsToMany("App\Owner", "visits")->withPivot('week_hours');
        return $this->belongsToMany("App\Visitor", "visits")->withPivot('created_at');
    }
}
