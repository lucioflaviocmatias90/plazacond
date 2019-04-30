<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Owner;
use App\Http\Requests\OwnerRequest;
use App\Enums\ResidentType;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::paginate(10);
        // $owners = new OwnerResource(Owner::paginate(10));
        return view('owners.index', compact('owners'));
    }

    public function indexJson()
    {
        return Owner::all();
    }

    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        return view('owners.edit', compact('owner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request)
    {
        //$validated = $request->validated();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $residentType = ResidentType::toSelectArray();       
        $owner = Owner::withCount(['resident','vehicle', 'letter', 'classified', 'kiosk', 'notice', 'visitor'])->findOrFail($id);
        return view('owners.show', compact(['owner', 'residentType']));
    }

    public function search(Request $request)
    {
        $owners = Owner::where('fullname','like','%'.$request->search.'%')->orWhere('blap','like','%'.$request->search.'%')->paginate(10);
        return view('owners.index', compact('owners'));
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
        $owner = Owner::findOrFail($id);
        $owner->update($request->except('photo_path'));
        if ($request->hasFile('photo_path')) {
            if ($owner->photo_path != '') Storage::disk('public')->delete($owner->photo_path);
            $path = $request->file('photo_path')->store('owners', 'public');
            $owner->update(['photo_path'=>$path]);
        }
        return redirect()->route('owner.show', ['owner'=>$owner->id])->with('success', 'Atualizado com sucesso!');
    }        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
