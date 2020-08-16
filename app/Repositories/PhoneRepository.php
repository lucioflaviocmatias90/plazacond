<?php

namespace App\Repositories;

use App\Models\Phone;

class PhoneRepository
{
    private $phone;

    /**
     * PhoneRepository Constructor
     *
     * @return void
     */
    public function __construct(Phone $phone)
    {
        $this->phone = $phone;
    }

    /**
     * List all phone numbers registered
     *
     * @param array $data
     */
    public function getAll($data)
    {
        $search = $data['search'] ?? null;

        $query = $this->phone;

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        return $query->orderBy('name', 'asc')->paginate();
    }
}
