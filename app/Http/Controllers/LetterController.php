<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Letter;
use App\Repositories\ApartmentRepository;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $letters = Letter::with('owner')->paginate(10);
        return view('letters.index',compact('letters'));
    }

    public function create(ApartmentRepository $repo)
    {
        return view('letters.create', ['owners'=>$repo->getAll()]);
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
        return redirect()->route('owner.show', [$request->owner_id])->with('success', 'Correspondência cadastrado com sucesso!');
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

    public function edit(ApartmentRepository $repo, $id)
    {
        $letter = Letter::findOrFail($id);
        return view('letters.edit', ['letter'=>$letter, 'owners'=>$repo->getAll()]);
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
        return redirect()->route('letter.index')->with('updated', 'Correspondência atualizado com sucesso!');
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
        return back()->with('deleted', 'Correspondência excluído com sucesso!');
    }
}
