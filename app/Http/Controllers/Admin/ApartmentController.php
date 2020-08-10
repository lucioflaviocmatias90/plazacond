<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ApartmentResource;
use App\Repositories\ApartmentRepository;

class ApartmentController extends Controller
{
    private $apartmentRepository;

    public function __construct(ApartmentRepository $apartmentRepository)
    {
        $this->apartmentRepository = $apartmentRepository;
    }

    /**
     * List all apartments registered with current condition
     */
    public function index(Request $request)
    {
        $apartments = $this->apartmentRepository
            ->getAll($request->query());

        return ApartmentResource::collection($apartments);
    }
}
