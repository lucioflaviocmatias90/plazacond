<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneRequest;
use App\Http\Resources\PhoneResource;
use App\Repositories\PhoneRepository;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    private $phoneRepository;

    /**
     * PhoneController constructor
     */
    public function __construct(PhoneRepository $phoneRepository)
    {
        $this->phoneRepository = $phoneRepository;
    }

    /**
     * List all phone numbers registered
     */
    public function index(Request $request)
    {
        $phones = $this->phoneRepository->getAll($request->query());

        return PhoneResource::collection($phones);
    }

    /**
     * Create a new phone number
     */
    public function store(PhoneRequest $request)
    {
        $data = $request->validated();

        $this->phoneRepository->create($data);

        return response()->json([
            'message' => 'Número de contato registrado com sucesso'
        ]);
    }
}
