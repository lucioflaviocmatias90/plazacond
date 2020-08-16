<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhoneResource;
use App\Repositories\PhoneRepository;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    private $phoneRepository;

    public function __construct(PhoneRepository $phoneRepository)
    {
        $this->phoneRepository = $phoneRepository;
    }

    public function index(Request $request)
    {
        $phones = $this->phoneRepository->getAll($request->query());

        return PhoneResource::collection($phones);
    }
}
