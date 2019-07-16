<?php

namespace App\Http\Controllers;

use App\Diseno;
use Session;
use Illuminate\Http\Request;

class DisenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disenos=Diseno::orderBy('id', 'ASC')->paginate(10);
        return view ('disenos.index',compact('disenos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('disenos.create');
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
           
            'fecha'=>'required',
          
        ]);
        Diseno::create($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('disenos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function show(Diseno $diseno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function edit(Diseno $diseno)
    {
        return view ('disenos.edit', compact ('diseno'));
        
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
           
            'fecha'=>'required',
        ]);
        Diseno::create($request->all());

        Session::flash('message','Tarea asignada correctamente');
        return redirect()->route('disenos.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diseno  $diseno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diseno $diseno)
    {
        $diseno->delete();
        Session::flash('message','Libro ha sido borrado  correctamente');
        return redirect()->route('disenos.index');
    }
}
