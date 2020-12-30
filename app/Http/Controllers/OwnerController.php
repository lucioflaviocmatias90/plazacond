<?php

namespace App\Http\Controllers;

use App\Models\ConditionApartment;
use App\Models\ResidentType;
use App\Repositories\OwnerRepository;
use App\Services\ImageService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Http\Requests\OwnerRequest;

class OwnerController extends Controller
{
    private $owner;
    private $service;

    public function __construct(OwnerRepository $owner)
    {
        $this->owner = $owner;
        $this->service = new ImageService('photo_path', 'owners');
    }

    public function index()
    {
        $owners = $this->owner->with('apartment.condition')->orderBy('apartment_id', 'asc')->paginate(10);

        return view('owners.index', compact('owners'));
    }

    public function create()
    {
        $owners = Apartment::all();
        $conditions = ConditionApartment::all();

        return view('owners.create', [ 'owners' => $owners, 'conditions' => $conditions ]);
    }

    public function edit($id)
    {
        $owner = $this->owner->with('apartment.condition')->findOrFail($id);
        $conditions = ConditionApartment::all();

        return view('owners.edit', ['owner' => $owner, 'conditions' => $conditions]);
    }

    public function store(OwnerRequest $request)
    {
        $owner = $this->owner->create($request->except('photo_path'));
        $owner->apartment->update(['condition_id' => $request->condition_id]);

        return redirect()->route('owner.index')->with('success', 'Morador cadastrado com sucesso!');
    }

    public function show($id)
    { 
         $apart = Apartment::with('owner')->findOrFail($id);
         $residentType = ResidentType::all();
         $owner = Owner::withCount(['resident','vehicle', 'letter', 'classified', 'kiosk', 'notice', 'visitor'])->findOrFail($id);

         return view('owners.show', ['owner' => $owner, 'apart' => $apart, 'residentType' => $residentType]);
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
    {;
        $owner = $this->owner->findOrFail($id);
        $owner->update($request->except('photo_path'));
        $owner->apartment->update(['condition_id' => $request->condition_id]);

        return redirect()->route('owner.show', ['owner'=>$this->owner->id])->with('updated', 'Morador atualizado com sucesso!');
    }        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Owner::findOrFail($id)->delete();
        return back()->with('deleted', 'Morador excluído com sucesso!');
    }
}
