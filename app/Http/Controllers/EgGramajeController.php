<?php

namespace App\Http\Controllers;

use App\Eg_gramaje;
use Illuminate\Http\Request;

class EgGramajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datos['gramaje']=Eg_gramaje::paginate(10000);
       return view('gramaje.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('gramaje.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosgramaje=request()->except('_token');
        Eg_gramaje::insert($datosgramaje);

        //return  response()->json($datosgramaje);
        return redirect('gramaje')->with('Mensaje','Datos ingresados con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eg_gramaje  $eg_gramaje
     * @return \Illuminate\Http\Response
     */
    public function show(Eg_gramaje $eg_gramaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eg_gramaje  $eg_gramaje
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gramaje= Eg_gramaje::findOrFail($id);
        return view('gramaje.edit',compact('gramaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eg_gramaje  $eg_gramaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosgramaje=request()->except(['_token','_method']);
         
         //dd($id);
         Eg_gramaje::where('id','=',$id)->update($datosgramaje);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('gramaje')->with('Mensaje','Modificacion realizada con exito.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eg_gramaje  $eg_gramaje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eliminar= Eg_gramaje::findOrFail($id);
         Eg_gramaje::destroy($id);
        return redirect('gramaje')->with('Mensaje','Datos Eliminados con exito.');
    }
}
