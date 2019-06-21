<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;
use App\Http\Requests\VehicleRequest;
use App\Repositories\ApartmentRepository;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::with('owner')->paginate(10);
        return view('vehicles.index', compact('vehicles'));
    }

    public function create(ApartmentRepository $repo)
    {
        return view('vehicles.create', ['owners'=>$repo->getAll()]);
    }
    
    public function store(VehicleRequest $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('vehicle.index')->with('success', 'Veículo cadastrado com sucesso!');
    }

    public function search(Request $request)
    {
        $vehicles = Vehicle::with('owner')->where('model','like','%'.$request->search.'%')->orWhere('vehicle_plate','like','%'.$request->search.'%')->paginate(10);
        return view('vehicles.index', compact('vehicles'));
    }

    public function edit(ApartmentRepository $repo, $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', ['owners'=>$repo->getAll(), 'vehicle' => $vehicle]);
    }

    public function show($id)
    {
        //
    }

    public function update(VehicleRequest $request, $id)
    {
        Vehicle::findOrFail($id)->update($request->all());
        return redirect()->route('vehicle.index')->with('updated', 'Veículo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Vehicle::findOrFail($id)->delete();
        return back()->with('deleted', 'Veículo excluído com sucesso!');
    }
}
