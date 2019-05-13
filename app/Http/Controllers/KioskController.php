<?php

namespace App\Http\Controllers;

use App\Kiosk;
use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ApartmentRepository;

class KioskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApartmentRepository $repo)
    {
        return view('kiosks.index', ['owners'=>$repo->getAll()]);
    }

    public function indexJson()
    {
        return Kiosk::with('owner.apartment')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kiosk::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ApartmentRepository $repo, $id)
    {
        $kiosk = Kiosk::findOrFail($id);
        return view('kiosks.show', ['kiosk'=>$kiosk, 'owners'=>$repo->getAll()]);
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
        Kiosk::findOrFail($id)->update($request->all());
        return redirect()->route('kiosk.index');
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
