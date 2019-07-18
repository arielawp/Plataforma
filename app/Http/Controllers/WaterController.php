<?php

namespace App\Http\Controllers;

use App\Water;
use Illuminate\Http\Request;
use Session;

class WaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waters=Water::orderBy('id', 'ASC')->paginate(10);
        return view ('waters.index',compact('waters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('waters.create');
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
            'nombre' =>'required',
            'actividad'=> 'required',
            'fecha'=>'required',
        ]);
        Water::create($request->all());

        Session::flash('mesage', 'Tarea asignada correctamente');
        return redirect()->route('waters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function show(Water $water)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function edit(Water $water)
    {
        return view('waters.edit', compact('water'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Water $water)
    {
          $request->validate([
            'nombre' =>'required',
            'actividad'=> 'required',
            'fecha'=>'required',
        ]);
        $water->update($request->all());

        Session::flash('mesage', 'Tarea actualizada correctamente');
        return redirect()->route('waters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Water  $water
     * @return \Illuminate\Http\Response
     */
    public function destroy(Water $water)
    {
        $water->delete();
        Session::flash('mesage', 'Tarea asignada correctamente');
        return redirect()->route('waters.index');
    }
}
