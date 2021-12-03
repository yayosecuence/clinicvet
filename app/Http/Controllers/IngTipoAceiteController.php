<?php

namespace App\Http\Controllers;

use App\Ing_tipo_aceite;
use Illuminate\Http\Request;

class IngTipoAceiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_tipo_aceite']=Ing_tipo_aceite::paginate(10);
        return view('ingreso_tipo_aceite.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso_tipo_aceite.create');
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
     * @param  \App\Ing_tipo_aceite  $ing_tipo_aceite
     * @return \Illuminate\Http\Response
     */
    public function show(Ing_tipo_aceite $ing_tipo_aceite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ing_tipo_aceite  $ing_tipo_aceite
     * @return \Illuminate\Http\Response
     */
    public function edit(Ing_tipo_aceite $ing_tipo_aceite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ing_tipo_aceite  $ing_tipo_aceite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ing_tipo_aceite $ing_tipo_aceite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ing_tipo_aceite  $ing_tipo_aceite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ing_tipo_aceite $ing_tipo_aceite)
    {
        //
    }
}
