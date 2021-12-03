<?php

namespace App\Http\Controllers;

use App\Horarios_basura;
use Illuminate\Http\Request;
use App\Urbanizaciones;

class HorariosBasuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos['horarios_basuras']=Horarios_basura::paginate(4);
    return view('horarios_basuras.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_basuras.create',compact('urbanizaciones'));
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
         $datosHorariosBasura=request()->except('_token');
        Horarios_basura::insert($datosHorariosBasura);

        return  response()->json($datosHorariosBasura);
        //return redirect('carrousell')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horarios_basura  $horarios_basura
     * @return \Illuminate\Http\Response
     */
    public function show(Horarios_basura $horarios_basura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios_basura  $horarios_basura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $basuras= Horarios_basura::findOrFail($id);
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_basuras.edit',compact('basuras','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horarios_basura  $horarios_basura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $datosHorariosBasura=request()->except(['_token','_method']);
        //dd($id);
         Horarios_basura::where('id','=',$id)->update($datosHorariosBasura);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('horarios_basuras')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horarios_basura  $horarios_basura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eliminar= Horarios_basura::findOrFail($id);
        Horarios_basura::destroy($id);
        return redirect('horarios_basuras')->with('Mensaje','Datos Eliminados con exito.');
    }
}
