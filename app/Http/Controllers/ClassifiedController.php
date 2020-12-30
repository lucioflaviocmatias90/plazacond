<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Services\ImageService;
use Illuminate\Http\Request;
use App\Models\Classified;
use App\Repositories\ApartmentRepository;

class ClassifiedController extends Controller
{
    private $classified;
    private $service;

    public function __construct(Classified $classified)
    {
        $this->classified = $classified;
        $this->service = new ImageService(['photo_path'], 'classifieds');
    }

    public function index()
    {
        $classifieds = $this->classified->with('owner')->paginate(10);
        return view('classifieds.index', compact('classifieds'));
    }

    public function create(ApartmentRepository $repo)
    {
        return view('classifieds.create', [ 'owners' => Apartment::all() ]);
    }

    public function store(Request $request)
    {
        $classified = $this->classified->create($request->except('photo_path'));
//        $this->service->uploadImage($request, $classified);

        return redirect()->route('classified.index')->with('success', 'Classificado cadastrado com sucesso!');
    }

    public function search(Request $request)
    {
        $classifieds = Classified::where('fullname','like','%'.$request->search.'%')->paginate(10);
        return view('classifieds.index', compact('classifieds'));
    }

    public function show($id)
    {
        //
    }

    public function edit(ApartmentRepository $repo, $id)
    {
        return view('classifieds.edit', [
            'classified' => Classified::findOrFail($id),
            'owners' => $repo->getAll(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Classified::findOrFail($id)->update($request->all());
        return redirect()->route('classified.edit')->with('updated', 'Classificado atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Classified::findOrFail($id)->delete();
        return back()->with('deleted', 'Classificado excluído com sucesso!');
    }
}
