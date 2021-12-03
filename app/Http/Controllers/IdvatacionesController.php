<?php

namespace App\Http\Controllers;

use App\Idvataciones;
use Illuminate\Http\Request;
use App\Urbanizaciones;

class IdvatacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos['idvataciones']=Idvataciones::paginate(10);
    return view('idvataciones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('idvataciones.create',compact('urbanizaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosIdvataciones=request()->except('_token');
        Idvataciones::insert($datosIdvataciones);

        //return  response()->json($datosIdvataciones);
        return redirect('idvataciones')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Idvataciones  $idvataciones
     * @return \Illuminate\Http\Response
     */
    public function show(Idvataciones $idvataciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Idvataciones  $idvataciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $idvataciones= Idvataciones::findOrFail($id);
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('idvataciones.edit',compact('idvataciones','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Idvataciones  $idvataciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $datosidvataciones=request()->except(['_token','_method']);
        //dd($id);
         Idvataciones::where('id','=',$id)->update($datosidvataciones);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('idvataciones')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Idvataciones  $idvataciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar= Idvataciones::findOrFail($id);
        Idvataciones::destroy($id);
        return redirect('idvataciones')->with('Mensaje','Datos Eliminados con exito.');
    }
}
