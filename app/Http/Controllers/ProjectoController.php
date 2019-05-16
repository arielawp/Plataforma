<?php

namespace App\Http\Controllers;

use App\Projecto;
use Illuminate\Http\Request;
use Session;

class ProjectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectos=Projecto::orderBy('id','asc')->paginate(5);
        return view ('Project.index',compact('projectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Project.create');

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
        projecto::create($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('Project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function show(Projecto $projecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projecto $projecto)
    {
        return view('Project.edit',compact('Diseno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projecto $projecto)
    {
        $request->validate([
            'nombre'=>'required',
            'actividad'=>'required',
            'inicio'=>'required',
            'fin'=>'required',
            'tiempo'=>'required',
            'fecha'=>'required',
            'terminado'=>'required',
            'comentarios'=>'required',
        ]);
        $diseno->update($request->all());


        Session::flash('message','Tarea editada y gurdada correctamente');
        return redirect()->route('Project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projecto $projecto)
    {
        //
    }
}
