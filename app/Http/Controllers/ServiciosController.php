<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urbanizaciones;

class ServiciosController extends Controller
{

	public function __construct(){
		//ya aqui mismo declaras que funciones son publicas y que funciones son privadas y te olvidas un poco del route osea solo las uso siempre y cuando este logeado chevere mija gracias ya le voy hacer weuabada a harryjajaja pilas 
		$this->middleware('auth')->only(['funcion2']);
	}

	/**
	 * Servicio obtiene datos
	*/
    public function obtenerDato(Request $request)
    {
        $valor=Urbanizaciones::where('id','=',$request->id)->first();
        if($valor){
	        return response()->json([
			    'pais' => $valor->pais,
			    'datoconsultado' => $request->id
			]);
	    }else{
	    	return response()->json([
			    'pais' => 'no encontrado',
			    'datoconsultado' => $request->id
			]);
	    }
    }

    /**
	 * Servicio obtiene datos
	*/
    public function funcion2(Request $request)
    {
        $valor=Urbanizaciones::where('id','=',$request->id)->first();
        if($valor){
	        return response()->json([
			    'pais' => $valor->pais,
			    'datoconsultado' => $request->id
			]);
	    }else{
	    	return response()->json([
			    'pais' => 'no encontrado',
			    'datoconsultado' => $request->id
			]);
	    }
    }
}
