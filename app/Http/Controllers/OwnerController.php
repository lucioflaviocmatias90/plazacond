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

        $owner->fullname = $request->input('fullname');
        $owner->condition = $request->input('condition');
        $owner->birthday = $request->input('birthday');
        $owner->email = $request->input('email');
        $owner->rg = $request->input('rg');
        $owner->cpf = $request->input('cpf');
        $owner->gender = $request->input('gender');
        $owner->phone = $request->input('phone');
        $owner->observation = $request->input('observation');

        $owner->save();

        return redirect()->route('owner.show', ['owner'=>$owner->id]);
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
