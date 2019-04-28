<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resident;
use App\Owner;
use App\Enums\ResidentType;

class ResidentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Resident::with('owner')->paginate(10);
        return view('residents.index', compact('residents'));
    }

    public function create()
    {
        $owners = Owner::all(['id', 'blap']);
        $residenType = ResidentType::toSelectArray();
        return view('residents.create', compact(['residenType', 'owners']));
    }

    public function edit($id)
    {   
        $owners = Owner::all(['id', 'blap']);
        $residenType = ResidentType::toSelectArray();
        $resident = Resident::with('owner')->findOrFail($id);
        return view('residents.edit', compact(['resident', 'residenType', 'owners']));
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
        $resident = new Resident();

        $resident->fullname = $request->input('fullname');
        $resident->rg = $request->input('rg');
        $resident->cpf = $request->input('cpf');
        $resident->gender = $request->input('gender');
        $resident->birthday = $request->input('birthday');
        $resident->phone = $request->input('phone');
        $resident->resident_type = $request->input('resident_type');
        $resident->owner_id = $request->input('owner_id');

        $resident->save();

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

        $resident->fullname = $request->input('fullname');
        $resident->rg = $request->input('rg');
        $resident->cpf = $request->input('cpf');
        $resident->gender = $request->input('gender');
        $resident->birthday = $request->input('birthday');
        $resident->phone = $request->input('phone');
        $resident->resident_type = $request->input('resident_type');
        $resident->owner_id = $request->input('owner_id');

        $resident->save();

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
}
