<?php

namespace App\Http\Controllers;

use App\Reglamentos;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Subirpdf;
use DateTime;
use DateTimeZone;

class ReglamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mDate=new DateTime('now', new DateTimeZone('America/Guayaquil'));
         $h=$mDate->format("H:i a");
         $d=$mDate->format("m/d/y");
         $hoy=$h." el ".$d;

         $id = Auth::id();
        $subirpdfs=Subirpdf::all('urbanizacion','nombre_pdf','pdf');
       $reglamentos=Reglamentos::all('urbanizacion','nombre_persona','comentario','fecha','Foto');
        $reglamentos=Reglamentos::paginate(5);
        $persona=User::where('id',$id)->first();//trabaja a ver que error te sale
        //dd($carrousell);
        return view('reglamentos.index',compact('reglamentos','persona','subirpdfs','hoy'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosReglamentos=request()->except('_token');
        Reglamentos::insert($datosReglamentos);

        //return  response()->json($datosReglamentos);
        return redirect('reglamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reglamentos  $reglamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Reglamentos $reglamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reglamentos  $reglamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Reglamentos $reglamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reglamentos  $reglamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reglamentos $reglamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reglamentos  $reglamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reglamentos $reglamentos)
    {
        //
    }
}
