<?php

namespace App\Http\Controllers;

use App\ing_producto;
use App\Ing_tipo_aceite;
use App\Ing_tipo_producto;
use App\Ing_tipo_sal;
use App\medida_producto;
use Response;
use App\json_values;
use App\pociento_sal;
use App\RetornoFirmaProveedores;
use App\RetornoProveedores;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IngProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_producto']=ing_producto::paginate(10);
        return view('ingreso_producto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombre_producto=Ing_tipo_producto::all('nombre_producto');
        $nombre_tipo_aceite=Ing_tipo_aceite::all('nombre_tipo_aceite');
        $nombre_sal=Ing_tipo_sal::all('nombre_sal');
        $porcentaje=pociento_sal::all('porcentaje');
        $medida_producto=medida_producto::all('medida_producto');

        return view('ingreso_producto.create',compact('nombre_producto','nombre_tipo_aceite','nombre_sal','porcentaje','medida_producto'));
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
     * @param  \App\ing_producto  $ing_producto
     * @return \Illuminate\Http\Response
     */
    public function show(ing_producto $ing_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ing_producto  $ing_producto
     * @return \Illuminate\Http\Response
     */
    public function edit(ing_producto $ing_producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ing_producto  $ing_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ing_producto $ing_producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ing_producto  $ing_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ing_producto $ing_producto)
    {
        //
    }
}
