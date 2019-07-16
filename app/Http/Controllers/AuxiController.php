<?php

namespace App\Http\Controllers;

use App\Auxi;
use Illuminate\Http\Request;
use Session;


class AuxiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ayudas=Auxi::orderBy('id','asc')->paginate(5);
        return view ('auxiliar.index',compact('ayudas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auxiliar.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre'=>'required',
            'actividad'=>'required',
            'inicio'=>'required',
            'fin'=>'required',
            'fecha'=>'required',
            'terminado'=>'required',
            'comentarios'=>'required',
        ]);
        auxi::create($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('auxiliar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auxi  $auxi
     * @return \Illuminate\Http\Response
     */
    public function show(Auxi $auxi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auxi  $auxi
     * @return \Illuminate\Http\Response
     */
    public function edit(Auxi $auxi)
    {
        return view('auxiliar.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auxi  $auxi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auxi $auxi)
    {
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auxi  $auxi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auxi $auxi)
    {
        //
    }
}
