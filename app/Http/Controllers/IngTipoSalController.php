<?php

namespace App\Http\Controllers;

use App\Ing_tipo_sal;
use Illuminate\Http\Request;

class IngTipoSalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_tipo_sal']=Ing_tipo_sal::paginate(10);
        return view('ingreso_tipo_sal.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ingreso_tipo_sal.create');
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
     * @param  \App\Ing_tipo_sal  $ing_tipo_sal
     * @return \Illuminate\Http\Response
     */
    public function show(Ing_tipo_sal $ing_tipo_sal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ing_tipo_sal  $ing_tipo_sal
     * @return \Illuminate\Http\Response
     */
    public function edit(Ing_tipo_sal $ing_tipo_sal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ing_tipo_sal  $ing_tipo_sal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ing_tipo_sal $ing_tipo_sal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ing_tipo_sal  $ing_tipo_sal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ing_tipo_sal $ing_tipo_sal)
    {
        //
    }
}
