<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;
use Session;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts=Text::orderBy('id','asc')->paginate(5);
        return view ('prueba.index',compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prueba.create');

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
        Text::create($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('prueba.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Text $text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        return view ('prueba.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
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
         $text->update($request->all());
        Session::flash('message','Libro actualizado correctamente');
        return redirect()->route('prueba.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        //
    }
}
