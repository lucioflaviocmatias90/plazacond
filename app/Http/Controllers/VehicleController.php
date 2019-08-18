<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Http\Requests\VehicleRequest;
use App\Repositories\ApartmentRepository;

class VehicleController extends Controller
{
    private $vehicle;

    /**
     * VehicleController constructor.
     * @param $vehicle
     */
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function index()
    {
        $vehicles = $this->vehicle->with('owner')->paginate(10);
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create', [ 'owners' => Apartment::all() ]);
    }
    
    public function store(VehicleRequest $request)
    {
        $this->vehicle->create($request->all());
        return redirect()->route('vehicle.index')->with('success', 'Veículo cadastrado com sucesso!');
    }

    public function search(Request $request)
    {
        $vehicles = $this->vehicle->with('owner')->where('model','like','%'.$request->search.'%')->orWhere('vehicle_plate','like','%'.$request->search.'%')->paginate(10);
        return view('vehicles.index', compact('vehicles'));
    }

    public function edit(ApartmentRepository $repo, $id)
    {
        $vehicle = $this->vehicle->findOrFail($id);
        return view('vehicles.edit', ['owners'=>$repo->getAll(), 'vehicle' => $vehicle]);
    }

    public function show($id)
    {
        //
    }

    public function update(VehicleRequest $request, $id)
    {
        $this->vehicle->findOrFail($id)->update($request->all());
        return redirect()->route('vehicle.index')->with('updated', 'Veículo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $this->vehicle->findOrFail($id)->delete();
        return back()->with('deleted', 'Veículo excluído com sucesso!');
    }
}
