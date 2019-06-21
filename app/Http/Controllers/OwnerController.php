<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Owner;
use App\Apartment;
use App\Repositories\ApartmentRepository;
use App\Http\Requests\OwnerRequest;
use App\Enums\ResidentType;

class OwnerController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new ImageService(['photo_path'], 'owners');
    }

    public function index()
    {
        $owners = Owner::with('apartment')->orderBy('apartment_id', 'asc')->paginate(10);
        return view('owners.index', compact('owners'));
    }

    public function indexJson()
    {
        return Apartment::all();
    }

    public function create(ApartmentRepository $repo)
    {
        return view('owners.create', ['owners'=>$repo->getAllApartmentNotRegistered()]);
    }

    public function edit($id)
    {
        $owner = Owner::with('apartment')->findOrFail($id);
        return view('owners.edit', compact('owner'));
    }

    public function store(Request $request)
    {
        $owner = Owner::create($request->except(['photo_path', 'condition']));
        $owner->apartment->update(['condition'=>$request->condition]);
        $this->service->uploadImage($request, $owner);
        return redirect()->route('owner.index')->with('success', 'Morador cadastrado com sucesso!');
    }

    public function show($id)
    { 
         $apart = Apartment::with('owner')->findOrFail($id);
         $residentType = ResidentType::toSelectArray();
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
    {
        $owner = Owner::with('apartment')->findOrFail($id);
        $owner->update($request->except(['photo_path', 'condition']));
        $owner->apartment->update(['condition'=>$request->condition]);
        return redirect()->route('owner.show', ['owner'=>$owner->id])->with('updated', 'Morador atualizado com sucesso!');
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
