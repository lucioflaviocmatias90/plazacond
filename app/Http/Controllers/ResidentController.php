<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resident;
use App\Enums\ResidentType;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ApartmentRepository;
use App\Repositories\ImageRepository;

class ResidentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Resident::with('owner.apartment')->paginate(10);
        return view('residents.index', compact('residents'));
    }

    public function create(ApartmentRepository $repo)
    {
        return view('residents.create', [
            'residenType' => ResidentType::toSelectArray(),
            'owners' => $repo->getAll(),
        ]);
    }

    public function edit(ApartmentRepository $repo, $id)
    {   
        return view('residents.edit', [
            'resident' => Resident::with('owner')->findOrFail($id),
            'residenType' => ResidentType::toSelectArray(), 
            'owners' => $repo->getAll(),
        ]);
    }

    public function search(Request $request)
    {
        $residents = Resident::with('owner')->where('fullname','like','%'.$request->search.'%')->paginate(10);

        return view('residents.index', compact('residents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resident = Resident::create($request->except('photo_path'));
        // if ($request->hasFile('photo_path')) {
        //     $path = $request->file('photo_path')->store('residents', 'public');
        //     Resident::findOrFail($resident->id)->update(['photo_path'=>$path]);
        // }
        return redirect()->route('resident.index')->with('success', 'Morador cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function update(Request $request, $id)
    {
        $resident = Resident::findOrFail($id);
        $resident->update($request->except('photo_path'));
        if ($request->hasFile('photo_path')) {
            if ($resident->photo_path != '') Storage::disk('public')->delete($resident->photo_path);
            $path = $request->file('photo_path')->store('residents', 'public');
            $resident->update(['photo_path'=>$path]);
        }
        return redirect()->route('resident.index')->with('success', 'Morador cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resident::findOrFail($id)->delete();
        return back();
    }

    public function uploadImageCrop(ImageRepository $repo, Request $request)
    {
        # code...
    }
}
