<?php

namespace App\Http\Controllers;

use App\Eg_marcas;
use Illuminate\Http\Request;

class EgMarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $datos['marcas']=Eg_marcas::paginate(10000);
          return view('marcaseg.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('marcaseg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosmarcas=request()->except('_token');
        Eg_marcas::insert($datosmarcas);

        //return  response()->json($datosgramaje);
        return redirect('marcaseg')->with('Mensaje','Datos ingresados con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eg_marcas  $eg_marcas
     * @return \Illuminate\Http\Response
     */
    public function show(Eg_marcas $eg_marcas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eg_marcas  $eg_marcas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas= Eg_marcas::findOrFail($id);
        return view('marcaseg.edit',compact('marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eg_marcas  $eg_marcas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosmarcas=request()->except(['_token','_method']);
         
         //dd($id);
         Eg_marcas::where('id','=',$id)->update($datosmarcas);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('marcaseg')->with('Mensaje','Modificacion realizada con exito.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eg_marcas  $eg_marcas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eliminar= Eg_marcas::findOrFail($id);
         Eg_marcas::destroy($id);
        return redirect('marcaseg')->with('Mensaje','Datos Eliminados con exito.');
    }
}
