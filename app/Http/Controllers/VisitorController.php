<?php

namespace App\Http\Controllers;

use App\Visitor;
use App\Owner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = Visitor::paginate(10);
        return view('visitors.index', compact('visitors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public  function create()
    {
        return view('visitors.create');
    }

    public function store(Request $request)
    {
        $visitor = new Visitor();

        $visitor->fullname = $request->input('fullname');
        $visitor->rg = $request->input('rg');
        $visitor->cpf = $request->input('cpf');
        $visitor->gender = $request->input('gender');
        // $visitor->birthday = $request->input('birthday');
        $visitor->phone = $request->input('phone');

        $visitor->save();

        return redirect()->route('visitor.index');
    }

    public function visitStore(Request $request, $id)
    {
        $visitor = Visitor::with('owner')->findOrFail($id);
        //dd($id);

        $visitor->owner()->attach($request->input('owner_id'), [
            'entry_date'=>$request->input('entry_date'),
            'departure_date'=>$request->input('departure_date'),
            'entry_hour'=>$request->input('entry_hour'),
            'departure_hour'=>$request->input('departure_hour'),
            'observation'=>$request->input('observation'),
        ]);

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
        $owners = Owner::all(['id', 'blap']);
        $visitor = Visitor::findOrFail($id);
        $visits = Visitor::with('owner')->findOrFail($id);
        return view('visitors.show', compact(['visitor', 'visits', 'owners']));
    }

    public function edit($id)
    {
        $visitor = Visitor::findOrFail($id);
        return view('visitors.edit', compact('visitor'));
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
        $visitor = Visitor::findOrFail($id);

        $visitor->fullname = $request->input('fullname');
        $visitor->rg = $request->input('rg');
        $visitor->cpf = $request->input('cpf');
        $visitor->gender = $request->input('gender');
        // $visitor->birthday = $request->input('birthday');
        $visitor->phone = $request->input('phone');

        $visitor->save();

        return redirect()->route('visitor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visitor::findOrFail($id)->delete();
        return back();
    }
}
