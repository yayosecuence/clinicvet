<?php

namespace App\Http\Controllers;

use App\Egreso;
use Illuminate\Http\Request;
use App\Urbanizaciones;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos['egresos']=Egreso::paginate(10);
    return view('egresos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('egresos.create',compact('urbanizaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosEgresos=request()->except('_token');
          if($request->hasFile('Foto')){         

            $datosEgresos['Foto']=$request->file('Foto')->store('Img_Egresos','public');
        }

        Egreso::insert($datosEgresos);

        //return  response()->json($datosEgresos);
        return redirect('egresos')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function show(Egreso $egreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $egresos= Egreso::findOrFail($id);
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('egresos.edit',compact('egresos','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEgresos=request()->except(['_token','_method']);
   
         Egreso::where('id','=',$id)->update($datosEgresos);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('egresos')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Egreso  $egreso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eliminar= Egreso::findOrFail($id);
        
        return redirect('egresos')->with('Mensaje','Datos Eliminados con exito.');
    }
}
