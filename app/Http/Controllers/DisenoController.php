<?php

namespace App\Http\Controllers;

use App\Diseno;
use Illuminate\Http\Request;
use Session;
class DisenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disenos=Diseno::orderBy('id','asc')->paginate(5);
        return view ('Diseño.index',compact('disenos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Diseño.create');

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
            'tiempo'=>'required',
            'fecha'=>'required',
            'terminado'=>'required',
            'comentarios'=>'required',
        ]);
        diseno::create($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('Diseño.index');

        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function show(Diseno $diseno)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function edit(Diseno $diseno)
    {
        return view('Diseño.edit',compact('Diseno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diseno $diseno)
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
     * @param  \App\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diseno $diseno)
    {
        //
    }
}
