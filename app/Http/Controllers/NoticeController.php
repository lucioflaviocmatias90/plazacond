<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ApartmentRepository;
use App\Models\Notice;

class NoticeController extends Controller
{
    private $notice;

    /**
     * NoticeController constructor.
     * @param $notice
     */
    public function __construct(Notice $notice)
    {
        $this->notice = $notice;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notices.index', [ 'notices' => $this->notice->with('owner')->paginate(10) ]);
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
        $this->notice->create($request->all());
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
        $this->notice->findOrFail($id)->delete();
        return back()->with('deleted', 'Comunicado excluído com sucesso!');
    }
}
