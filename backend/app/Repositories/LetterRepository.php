<?php

namespace App\Repositories;

use App\Models\Letter;

class LetterRepository
{
    private $letter;

    public function __construct(Letter $letter)
    {
        $this->letter = $letter;
    }

    public function getAll(array $data = [])
    {
        $apartment = $data['apartment_id'] ?? null;
        $status = $data['status'] ?? null;
        $search = $data['search'] ?? null;

        $query = $this->letter->with(['apartment', 'status']);

        if ($apartment) {
            $query->where('apartment_id', $apartment);
        }

        if ($status) {
            $query->where('status', $status);
        }

        if ($search) {
            $query->where('title', 'like', "%{$search}%");
        }

        return $query->orderByDesc('created_at')->paginate();
    }

    public function create(array $data)
    {
        return $this->letter->create($data);
    }

    public function update(string $id, array $data): void
    {
        $letter = $this->letter->findOrFail($id);

        $letter->update($data);
    }

    public function delete(string $id)
    {
        $letter = $this->letter->findOrFail($id);
        $letter->delete();

        return true;
    }
}
