<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LetterRequest;
use App\Http\Resources\LetterResource;
use App\Repositories\LetterRepository;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    /**
     * @var \App\Repositories\LetterRepository $letterRepository
     */
    private $letterRepository;

    /**
     * LetterController constructor
     */
    public function __construct(LetterRepository $letterRepository)
    {
        $this->letterRepository = $letterRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $letters = $this->letterRepository->getAll();

        return LetterResource::collection($letters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LetterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LetterRequest $request)
    {
        $validated = $request->validated();
        $this->letterRepository->create($validated);

        return response()->json([
            'message' => 'Correspondência criado com sucesso'
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LetterRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LetterRequest $request, $id)
    {
        $validated = $request->validated();
        $this->letterRepository->update($id, $validated);

        return response()->json([
            'message' => 'Correspondência atualizada com sucesso'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->letterRepository->delete($id);
    }
}
