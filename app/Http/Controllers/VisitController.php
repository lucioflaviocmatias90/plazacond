<?php

namespace App\Http\Controllers;

use App\Repositories\ApartmentRepository;
use App\Models\Visit;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function edit(ApartmentRepository $repo, $id)
    {
        $visit = Visit::findOrFail($id);
        return view('visits.edit', ['owners'=>$repo->getAll(), 'visit'=>$visit]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Visit::create($request->all());
        return redirect()->route('visitor.index');
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
        $res = Visit::findOrFail($id);
        $res->update($request->all());
        return redirect()->route('visitor.show', ['visitor'=>$res->visitor_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visit::findOrFail($id)->delete();
        return back();
    }
}
