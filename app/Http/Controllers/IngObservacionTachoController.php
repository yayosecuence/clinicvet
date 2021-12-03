<?php

namespace App\Http\Controllers;

use App\ing_observacion_tacho;
use Illuminate\Http\Request;

class IngObservacionTachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_observacion_tacho']=ing_observacion_tacho::paginate(1000);
        return view('observacion_tachos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('observacion_tachos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $observacion_parametro=request()->except('_token');
        ing_observacion_tacho::insert($observacion_parametro);
        return redirect('observacion_tachos')->with('Mensaje','Datos ingresados con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ing_observacion_tacho  $ing_observacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function show(ing_observacion_tacho $ing_observacion_tacho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ing_observacion_tacho  $ing_observacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $observacion_parametro= ing_observacion_tacho::findOrFail($id);
        return view('observacion_tachos.edit',compact('observacion_parametro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ing_observacion_tacho  $ing_observacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $observacion_parametro=request()->except(['_token','_method']);
         
         //dd($id);
         ing_observacion_tacho::where('id','=',$id)->update($observacion_parametro);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('observacion_tachos')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ing_observacion_tacho  $ing_observacion_tacho
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eliminar= ing_observacion_tacho::findOrFail($id);
         ing_observacion_tacho::destroy($id);
        return redirect('observacion_tachos')->with('Mensaje','Datos Eliminados con exito.');
    }
}
