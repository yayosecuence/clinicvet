<?php

namespace App\Http\Controllers;

use App\pociento_sal;
use Illuminate\Http\Request;

class PocientoSalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ing_porciento_sal']=pociento_sal::paginate(10);
        return view('ingreso_porciento_sal.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso_porciento_sal.create');
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
     * @param  \App\pociento_sal  $pociento_sal
     * @return \Illuminate\Http\Response
     */
    public function show(pociento_sal $pociento_sal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pociento_sal  $pociento_sal
     * @return \Illuminate\Http\Response
     */
    public function edit(pociento_sal $pociento_sal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pociento_sal  $pociento_sal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pociento_sal $pociento_sal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pociento_sal  $pociento_sal
     * @return \Illuminate\Http\Response
     */
    public function destroy(pociento_sal $pociento_sal)
    {
        //
    }
}
