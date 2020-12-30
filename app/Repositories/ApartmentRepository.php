<?php

namespace App\Repositories;

use App\Models\Apartment;

class ApartmentRepository
{
    private $apartment;

    /**
     * ApartmentRepository Constructor
     *
     * @return void
     */
    public function __construct(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }

	public function getAll(array $data = [])
	{
        $condition = $data['condition'] ?? null;
        $blap = $data['blap'] ?? null;

        $query = $this->apartment->with('condition');

        if ($condition) {
            $query->where('condition_id', $condition);
        }

        if ($blap) {
            $query->where('blap', 'like', '%'.$blap.'%');
        }

        return $query->orderBy('blap', 'asc')->paginate();
	}
}

?>
