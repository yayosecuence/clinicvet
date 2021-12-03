<?php

namespace App\Http\Controllers;

use App\Horarios_limpieza;
use Illuminate\Http\Request;
use App\Urbanizaciones;

class HorariosLimpiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['horarios_limpiezas']=Horarios_limpieza::paginate(10);
    return view('horarios_limpiezas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_limpiezas.create',compact('urbanizaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosHorariosLimpieza=request()->except('_token');
        Horarios_limpieza::insert($datosHorariosLimpieza);

        return  response()->json($datosHorariosLimpieza);
        //return redirect('carrousell')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horarios_limpieza  $horarios_limpieza
     * @return \Illuminate\Http\Response
     */
    public function show(Horarios_limpieza $horarios_limpieza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios_limpieza  $horarios_limpieza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $limpiezas= Horarios_limpieza::findOrFail($id);
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_limpiezas.edit',compact('limpiezas','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horarios_limpieza  $horarios_limpieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosHorariosLimpieza=request()->except(['_token','_method']);
         
         //dd($id);
         Horarios_limpieza::where('id','=',$id)->update($datosHorariosLimpieza);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('horarios_limpiezas')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horarios_limpieza  $horarios_limpieza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar= Horarios_limpieza::findOrFail($id);
         Horarios_limpieza::destroy($id);
        return redirect('horarios_limpiezas')->with('Mensaje','Datos Eliminados con exito.');
    }
}
