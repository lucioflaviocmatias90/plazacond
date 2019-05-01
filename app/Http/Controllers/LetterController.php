<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Letter;
use App\Apartment;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getOwners()
    {
        return Apartment::all(['id', 'blap']);
    }

    public function index()
    {
        $letters = Letter::with('owner')->paginate(10);
        return view('letters.index',compact('letters'));
    }

    public function create()
    {
        // $owners = Owner::all(['id', 'blap']);
        return view('letters.create', ['owners'=>$this->getOwners()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Letter::create($request->all());
        return redirect()->route('owner.show', [$request->owner_id]);
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

    public function edit($id)
    {
        $letter = Letter::findOrFail($id);
        return view('letters.edit', ['letter'=>$letter, 'owners'=>$this->getOwners()]);
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
        Letter::findOrFail($id)->update($request->all());
        return redirect()->route('letter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Letter::findOrFail($id)->delete();
        return back();
    }
}
