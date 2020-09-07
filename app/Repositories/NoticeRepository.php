<?php

namespace App\Repositories;

use App\Models\Notice;

class NoticeRepository
{
    private $notice;

    /**
     * NoticeRepository constructor
     */
    public function __construct(Notice $notice)
    {
        $this->notice = $notice;
    }

    /**
     * List all notices
     */
    public function getAll($data)
    {
        $search = $data['search'] ?? null;

        $query = $this->notice->with('apartment');

        if ($search) {
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        return $query->orderByDesc('created_at')->paginate();
    }

    public function create($data)
    {
        return $this->notice->create($data);
    }
}
