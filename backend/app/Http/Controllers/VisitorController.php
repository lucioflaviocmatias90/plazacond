<?php

namespace App\Http\Controllers;

use App\Repositories\ApartmentRepository;
use App\Services\ImageService;
use App\Models\Visitor;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new ImageService(['photo_path'], 'visitors');
    }

    public function index()
    {
        $visitors = Visitor::paginate(10);
        return view('visitors.index', compact('visitors'));
    }

    public  function create()
    {
        return view('visitors.create');
    }

    public function store(Request $request)
    {
        $visitor = Visitor::create($request->except('photo_path'));
        $this->service->uploadImage($request, $visitor);
        return redirect()->route('visitor.index')->with('success', 'Visitante cadastrado com sucesso!');
    }

    public function visitStore(Request $request, $id)
    {
        $visitor = Visitor::with('owner')->findOrFail($id);

        $visitor->owner()->attach($request->input('owner_id'), [
            'entry_date'=>$request->input('entry_date'),
            'departure_date'=>$request->input('departure_date'),
            'entry_hour'=>$request->input('entry_hour'),
            'departure_hour'=>$request->input('departure_hour'),
            'observation'=>$request->input('observation'),
        ]);
        return back();
    }

    public function show(ApartmentRepository $repo, $id)
    {
        return view('visitors.show', [
            'apartments' => $repo->getAll(),
            'visitor' => Visitor::with('owner')->findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $visitor = Visitor::findOrFail($id);
        return view('visitors.edit', compact('visitor'));
    }

    public function update(Request $request, $id)
    {
        $visitor = Visitor::findOrFail($id);
        $visitor->update($request->except('photo_path'));
        return redirect()->route('visitor.index')->with('updated', 'Visitante atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Visitor::findOrFail($id)->delete();
        return back()->with('deleted', 'Visitante excluído com sucesso!');
    }
}
