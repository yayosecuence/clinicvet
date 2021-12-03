<?php

namespace App\Http\Controllers;

use App\Ing_tipo_tacho;
use Illuminate\Http\Request;

class IngTipoTachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_tipo_produccion']=Ing_tipo_tacho::paginate(1000);
        return view('ingreso_tipo_produccion.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso_tipo_produccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre_tipo_tacho=request()->except('_token');
        Ing_tipo_tacho::insert($nombre_tipo_tacho);
        return redirect('ingreso_tipo_produccion')->with('Mensaje','Datos ingresados con exito.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ing_tipo_tacho  $ing_tipo_tacho
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ing_tipo_tacho  $ing_tipo_tacho
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nombre_tipo_tacho= Ing_tipo_tacho::findOrFail($id);
        return view('ingreso_tipo_produccion.edit',compact('nombre_tipo_tacho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ing_tipo_tacho  $ing_tipo_tacho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nombre_tipo_tacho=request()->except(['_token','_method']);
         
         //dd($id);
         Ing_tipo_tacho::where('id','=',$id)->update($nombre_tipo_tacho);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('ingreso_tipo_produccion')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ing_tipo_tacho  $ing_tipo_tacho
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar= Ing_tipo_tacho::findOrFail($id);
         Ing_tipo_tacho::destroy($id);
        return redirect('ingreso_tipo_produccion')->with('Mensaje','Datos Eliminados con exito.');
    }
}
