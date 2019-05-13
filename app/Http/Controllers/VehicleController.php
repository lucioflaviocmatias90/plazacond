<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;
use App\Http\Requests\VehicleRequest;
use App\Repositories\ApartmentRepository;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::with('owner')->paginate(10);
        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create(ApartmentRepository $repo)
    {
        return view('vehicles.create', ['owners'=>$repo->getAll()]);
    }
    
    public function store(VehicleRequest $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('vehicle.index');
    }

    public function search(Request $request)
    {
        $vehicles = Vehicle::with('owner')->where('model','like','%'.$request->search.'%')->orWhere('vehicle_plate','like','%'.$request->search.'%')->paginate(10);
        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleRequest $request, $id)
    {
        Vehicle::findOrFail($id)->update($request->all());
        return redirect()->route('vehicle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehicle::findOrFail($id)->delete();
        return back();
    }
}
