<?php

namespace App\Http\Controllers;

use App\Horarios_reuniones;
use Illuminate\Http\Request;
use App\Urbanizaciones;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;



class HorariosReunionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['horarios_reuniones']=Horarios_reuniones::paginate(10);
    return view('horarios_reuniones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_reuniones.create',compact('urbanizaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosHorariosReuniones=request()->except('_token');
        Horarios_reuniones::insert($datosHorariosReuniones);

        return  response()->json($datosHorariosReuniones);
        //return redirect('carrousell')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function show(Horarios_reuniones $horarios_reuniones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reuniones= Horarios_reuniones::findOrFail($id);
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_reuniones.edit',compact('reuniones','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosHorariosReuniones=request()->except(['_token','_method']);
        //dd($id);
         Horarios_reuniones::where('id','=',$id)->update($datosHorariosReuniones);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('horarios_reuniones')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eliminar= Horarios_reuniones::findOrFail($id);
        Horarios_reuniones::destroy($id);
        return redirect('horarios_reuniones')->with('Mensaje','Datos Eliminados con exito.');
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {   
            $reuniones= User::findOrFail($id);
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_reuniones.edit2',compact('reuniones','urbanizaciones'));

        
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
      public function update2(Request $request, $id)
    {
        $datosuser=request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $cambiofoto= User::findOrFail($id);
            Storage::delete('public/'.$cambiofoto->Foto);
            $datosuser['Foto']=$request->file('Foto')->store('Img_persona','public');
        }
         User::where('id','=',$id)->update($datosuser);        
        return redirect('home');

    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
    public function contra($id)
    {   
            $reuniones= User::findOrFail($id);
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('horarios_reuniones.contra',compact('reuniones','urbanizaciones'));

        
    }

 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horarios_reuniones  $horarios_reuniones
     * @return \Illuminate\Http\Response
     */
      public function updatecontra(Request $request)
    {
          
       
       $request->user()->fill([

            'password' => Hash::make($request['password'], [
    'rounds' => 10
])
        ])->save();

       return redirect('home');

    }

}
