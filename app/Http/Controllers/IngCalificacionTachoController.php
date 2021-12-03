<?php

namespace App\Http\Controllers;

use App\Ing_calificacion_tacho;
use Illuminate\Http\Request;

class IngCalificacionTachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_calificacion_tacho']=Ing_calificacion_tacho::paginate(1000);
        return view('calificacion_tachos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ing_calificacion_tacho  $ing_calificacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function show(Ing_calificacion_tacho $ing_calificacion_tacho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ing_calificacion_tacho  $ing_calificacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificacion_tacho= Ing_calificacion_tacho::findOrFail($id);
        return view('calificacion_tachos.edit',compact('calificacion_tacho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ing_calificacion_tacho  $ing_calificacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ing_calificacion_tacho $ing_calificacion_tacho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ing_calificacion_tacho  $ing_calificacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ing_calificacion_tacho $ing_calificacion_tacho)
    {
        //
    }
}
