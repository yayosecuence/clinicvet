<?php

namespace App\Http\Controllers;

use App\Ing_grupo_trabajo;
use Illuminate\Http\Request;

class IngGrupoTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_grupo_trabajo']=ing_grupo_trabajo::paginate(1000);
        return view('ingreso_grupo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso_grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre_grupo_trabajo=request()->except('_token');
        ing_grupo_trabajo::insert($nombre_grupo_trabajo);
        return redirect('ingreso_grupo')->with('Mensaje','Datos ingresados con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ing_grupo_trabajo  $ing_grupo_trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(ing_grupo_trabajo $ing_grupo_trabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ing_grupo_trabajo  $ing_grupo_trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $nombre_grupo_trabajo= ing_grupo_trabajo::findOrFail($id);
        return view('ingreso_grupo.edit',compact('nombre_grupo_trabajo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ing_grupo_trabajo  $ing_grupo_trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $nombre_grupo_trabajo=request()->except(['_token','_method']);
         
         //dd($id);
         ing_grupo_trabajo::where('id','=',$id)->update($nombre_grupo_trabajo);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('ingreso_grupo')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ing_grupo_trabajo  $ing_grupo_trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar= ing_grupo_trabajo::findOrFail($id);
         ing_grupo_trabajo::destroy($id);
        return redirect('ingreso_grupo')->with('Mensaje','Datos Eliminados con exito.');
    }
}
