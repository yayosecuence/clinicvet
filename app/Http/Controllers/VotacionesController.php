<?php

namespace App\Http\Controllers;

use App\Votaciones;
use Illuminate\Http\Request;
use App\Urbanizaciones;
use App\Idvataciones;
use App\User;

class VotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos['votaciones']=Votaciones::paginate(10);
    return view('votaciones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        $idvataciones=Idvataciones::all('tipo_votacion','urbanizacion');
        $usuarios=User::all('name','cedula','urbanizacion');
        return view('votaciones.create',compact('urbanizaciones','idvataciones','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosVotaciones=request()->except('_token');
         if($request->hasFile('Foto')){         

            $datosVotaciones['Foto']=$request->file('Foto')->store('Img_votaciones','public');
        }

        Votaciones::insert($datosVotaciones);

        //return  response()->json($datosVotaciones);
       return redirect('votaciones')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Votaciones $votaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $votaciones= Votaciones::findOrFail($id);
        $idvataciones=Idvataciones::all('tipo_votacion','urbanizacion');
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        $usuarios=User::all('name','cedula','urbanizacion');
        return view('votaciones.edit',compact('votaciones','urbanizaciones','idvataciones','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosVotaciones=request()->except(['_token','_method']);
        //dd($id);
         Votaciones::where('id','=',$id)->update($datosVotaciones);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('votaciones')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Votaciones  $votaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar= Votaciones::findOrFail($id);
        Votaciones::destroy($id);
        return redirect('votaciones')->with('Mensaje','Datos Eliminados con exito.');
    }
}
