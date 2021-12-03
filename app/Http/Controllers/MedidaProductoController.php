<?php

namespace App\Http\Controllers;

use App\medida_producto;
use Illuminate\Http\Request;

class MedidaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_medida_producto']=medida_producto::paginate(10);
        return view('ingreso_medida_producto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso_medida_producto.create');
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
     * @param  \App\medida_producto  $medida_producto
     * @return \Illuminate\Http\Response
     */
    public function show(medida_producto $medida_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medida_producto  $medida_producto
     * @return \Illuminate\Http\Response
     */
    public function edit(medida_producto $medida_producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medida_producto  $medida_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medida_producto $medida_producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medida_producto  $medida_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(medida_producto $medida_producto)
    {
        //
    }
}
