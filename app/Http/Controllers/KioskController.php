<?php

namespace App\Http\Controllers;

use App\Kiosk;
use App\Owner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KioskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOwners()
    {
        return Owner::all(['id', 'blap']);
    }

    public function index()
    {
        return view('kiosks.index', ['owners'=>$this->getOwners()]);
    }

    public function indexJson()
    {
        return Kiosk::with('owner')->get();
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
    public function show($id)
    {
        $kiosk = Kiosk::findOrFail($id);
        return view('kiosks.show', ['kiosk'=>$kiosk, 'owners'=>$this->getOwners()]);
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
