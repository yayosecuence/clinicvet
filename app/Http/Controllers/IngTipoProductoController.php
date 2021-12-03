<?php

namespace App\Http\Controllers;

use App\Ing_tipo_producto;
use Illuminate\Http\Request;

class IngTipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_tipo_producto']=Ing_tipo_producto::paginate(10);
        return view('ingreso_tipo_producto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso_tipo_producto.create');
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
     * @param  \App\Ing_tipo_producto  $ing_tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function show(Ing_tipo_producto $ing_tipo_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ing_tipo_producto  $ing_tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Ing_tipo_producto $ing_tipo_producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ing_tipo_producto  $ing_tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ing_tipo_producto $ing_tipo_producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ing_tipo_producto  $ing_tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ing_tipo_producto $ing_tipo_producto)
    {
        //
    }
}
