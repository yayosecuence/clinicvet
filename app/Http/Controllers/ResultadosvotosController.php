<?php

namespace App\Http\Controllers;

use App\Resultadosvotos;
use Illuminate\Http\Request;
use App\Idvataciones;
use App\User;
use App\Urbanizaciones;
use App\Votaciones;
use App\Votosguardar;

class ResultadosvotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        $idvataciones=Idvataciones::all('tipo_votacion','urbanizacion','num_votantes');
        $usuarios=User::all('name','cedula','urbanizacion','foto');
        $votaciones=Votaciones::all('nombre_candidato','cedula_candidato','numero_votos','porcentaje','urbanizacion','tipo_votacion','Foto');
         $votosguardados=Votosguardar::all('tipo_votacion','cedula_votante','urbanizacion');
    return view('resultadosvotos.index',compact('urbanizaciones','idvataciones','usuarios','votaciones','votosguardados'));
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
     * @param  \App\Resultadosvotos  $resultadosvotos
     * @return \Illuminate\Http\Response
     */
    public function show(Resultadosvotos $resultadosvotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resultadosvotos  $resultadosvotos
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultadosvotos $resultadosvotos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resultadosvotos  $resultadosvotos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultadosvotos $resultadosvotos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resultadosvotos  $resultadosvotos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultadosvotos $resultadosvotos)
    {
        //
    }
}
