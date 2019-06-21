<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
{
	use SoftDeletes;

	protected $table = 'visitors';
	protected $fillable = ['fullname', 'rg', 'cpf', 'phone', 'photo_path', 'gender'];
	protected $dates = ['deleted_at'];
	
    public function owner()
    {
        return $this->belongsToMany("App\Owner", "visits", "visitor_id", "owner_id")->withPivot('entry_date', 'departure_date', 'entry_hour', 'departure_hour', 'observation', 'id');
    }
}
