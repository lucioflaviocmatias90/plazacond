<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classified;
use App\Repositories\ApartmentRepository;

class ClassifiedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::with('owner')->paginate(12);
        return view('classifieds.index', compact('classifieds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ApartmentRepository $repo)
    {
        return view('classifieds.create', ['owners'=>$repo->getAll()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Classified::create($request->except('photo_path'));
        return redirect()->route('classified.index');
    }

    public function search(Request $request)
    {
        $classifieds = Classified::where('fullname','like','%'.$request->search.'%')->paginate(10);
        return view('classifieds.index', compact('classifieds'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ApartmentRepository $repo, $id)
    {
        return view('classifieds.edit', [
            'classified' => Classified::findOrFail($id),
            'owners' => $repo->getAll(),
        ]);
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
        Classified::findOrFail($id)->update($request->all());
        return redirect()->route('classified.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classified::findOrFail($id)->delete();
        return back();
    }
}
