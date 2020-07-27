<?php

namespace App\Repositories;

use App\Models\Apartment;
use Illuminate\Support\Facades\DB;

class ApartmentRepository
{
	public function getAll()
	{
		return DB::table('owners')
            ->join('apartments', 'owners.apartment_id', '=', 'apartments.id')
            ->select('owners.id', 'apartments.blap')
            ->get();
	}

	public function getAllApartment()
	{
		return Apartment::all(['id', 'blap']);
	}

    public function getAllApartmentNotRegistered()
    {
        return Apartment::where('condition', 'vazio')
            ->where('updated_at', null)
            ->get(['id', 'blap']);
    }
}

?>
