<?php

namespace App\Http\Controllers;

use App\Incidencias;
use Illuminate\Http\Request;
use App\Urbanizaciones;
use Illuminate\Support\Facades\Storage;

class IncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['incidencias']=Incidencias::paginate(10);
    return view('incidencias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('incidencias.create',compact('urbanizaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosInsidencias=request()->except('_token');

        if($request->hasFile('Foto')){         

            $datosInsidencias['Foto']=$request->file('Foto')->store('Img_insidencias','public');
        }

        Incidencias::insert($datosInsidencias);

        return  response()->json($datosInsidencias);
        //return redirect('carrousell')->with('Mensaje','Imagen agregada con exito.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidencias  $incidencias
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencias $incidencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidencias  $incidencias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $incidencias= Incidencias::findOrFail($id);
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('incidencias.edit',compact('incidencias','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidencias  $incidencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $datosInsidencias=request()->except(['_token','_method']);
          if($request->hasFile('Foto')){
            $incidencias= Incidencias::findOrFail($id);
            Storage::delete('public/'.$incidencias->Foto);
           

            $datosInsidencias['Foto']=$request->file('Foto')->store('Img_insidencias','public');
        }

         //dd($id);
         Incidencias::where('id','=',$id)->update($datosInsidencias);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('incidencias')->with('Mensaje','Dato Modificado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidencias  $incidencias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $incidencias= Incidencias::findOrFail($id);
        if(Storage::delete('public/'.$incidencias->Foto)){
        Incidencias::destroy($id);}

        return redirect('incidencias')->with('Mensaje','Dato Eliminado con exito.');
    }
}
