<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ApartmentRepository;
use App\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notices.index', ['notices'=>Notice::with('owner')->paginate(10)]);
    }

    public function create(ApartmentRepository $repo)
    {
        return view('notices.create', ['owners'=>$repo->getAll()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Notice::create($request->all());
        return redirect()->route('notice.index')->with('success', 'Comunicado cadastrado com sucesso!');
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
        //->with('updated', 'Comunicado atualizado com sucesso!')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notice::findOrFail($id)->delete();
        return back()->with('deleted', 'Comunicado excluído com sucesso!');
    }
}
