<?php

namespace App\Http\Controllers;

use App\Urbanizaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UrbanizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $datos['urbanizaciones']=Urbanizaciones::paginate(10);
    return view('urbanizaciones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('urbanizaciones.create');
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
        $datosUrbanizaciones=request()->except('_token');

        if($request->hasFile('Foto')){         

            $datosUrbanizaciones['Foto']=$request->file('Foto')->store('Img_urbanizaciones','public');
        }

        Urbanizaciones::insert($datosUrbanizaciones);

        return  response()->json($datosUrbanizaciones);
        //return redirect('carrousell')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Urbanizaciones  $urbanizaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Urbanizaciones $urbanizaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Urbanizaciones  $urbanizaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Urbanizaciones $urbanizaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Urbanizaciones  $urbanizaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Urbanizaciones $urbanizaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Urbanizaciones  $urbanizaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Urbanizaciones $urbanizaciones)
    {
        //
    }
}
