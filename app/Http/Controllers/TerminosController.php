<?php

namespace App\Http\Controllers;

use App\Terminos;
use Illuminate\Http\Request;
use App\Urbanizaciones;
use App\User;
use App\Actualizacion_pago;
use App\Notificaciones;
use App\Gadmunicipales;

class TerminosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        $datos['terminos']=Terminos::paginate(10);
        return view('terminos.index',compact('datos','urbanizaciones'));
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
     * @param  \App\Terminos  $terminos
     * @return \Illuminate\Http\Response
     */
    public function show(Terminos $terminos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Terminos  $terminos
     * @return \Illuminate\Http\Response
     */
    public function edit(Terminos $terminos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Terminos  $terminos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terminos $terminos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Terminos  $terminos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terminos $terminos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function panelcontrol()
    {   
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        $personas=User::all('name','cedula','estado','confirmacion','urbanizacion','pago');
        $datos['terminos']=Terminos::paginate(3);
        $jbutron=Actualizacion_pago::all('urbanizacion','reglamento','noticia','carrousell');
        $gadmunicipales=Gadmunicipales::all('cedula');


        return view('terminos.panelcontrol',compact('datos','urbanizaciones','personas','jbutron','gadmunicipales'));

        
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function gadmunicipal()
    {   
      
        return view('terminos.gadmunicipal');
        
    }
}
