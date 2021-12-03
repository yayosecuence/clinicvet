<?php

namespace App\Http\Controllers;

use App\Encabezado_tacho;
use App\ing_tacho;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EncabezadoTachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['encabezado_tacho']=encabezado_tacho::paginate(10);
        return view('ingreso_encabezado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=encabezado_tacho::all('id');
       $cod_egreso=Eg_cod_egresos::all('cod_egreso');
        $gramaje=Eg_gramaje::all('gramaje');
         $marcas=Eg_marcas::all('marcas');
         // $producto=Eg_cod_egresos::all('producto');
          // $horario=Eg_cod_egresos::all('horario');
        return view('ingreso_encabezado.create',compact('lote','cod_egreso','gramaje','marcas'));
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
     * @param  \App\encabezado_tacho  $encabezado_tacho
     * @return \Illuminate\Http\Response
     */
    public function show($documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encabezado_tacho  $encabezado_tacho
     * @return \Illuminate\Http\Response
     */
    public function edit(encabezado_tacho $encabezado_tacho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encabezado_tacho  $encabezado_tacho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encabezado_tacho $encabezado_tacho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encabezado_tacho  $encabezado_tacho
     * @return \Illuminate\Http\Response
     */
    public function destroy(encabezado_tacho $encabezado_tacho)
    {
        //
    }
 public function ingreso_tachos($id)
    {

        $ingreso_tachos= ing_tacho::findOrFail($id);
        $codigo_tacho=$ingreso_tachos->codigo_tacho;
        $calificacion_tacho=$ingreso_tachos->calificacion_tacho;
        $peso_kilo=$ingreso_tachos->peso_kilo;
        $observacion_parametrizada=$ingreso_tachos->observacion_parametrizada;
        $codigo_encabezado=$ingreso_tachos->codigo_encabezado;


        // dd($lotes);

        return view('ingreso_encabezado.ingreso_tachos');
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
     public function encabezado_produccion_pdf($id, $codigo_encabezado)
    {  
        $ingreso_encabezados= encabezado_tacho::all('id', 'juliano_general', 'juliano_interno', 'fecha_tacho', 'horario_inicio', 'horario_fin', 'supervisor', 'grupo_trabajo', 'freidora', 'codigo_producto', 'codigo_equipo', 'operador_tacho', 'tipo_tacho', 'tacho_caja', 'codigo_encabezado')->where('id',$id)->where('codigo_encabezado',$codigo_encabezado);
       // dd($egreso_encabezados->mapWithKeys(function($elemento) {return [ 'lote' => $elemento->lote];
//}));

        $ingreso_tachos= ing_tacho::all('id','cod_tacho', 'calificacion_tacho','peso_kilo', 'observacion_parametrizada', 'codigo_encabezado')->where('codigo_encabezado',$codigo_encabezado);

       /*
        $egreso_finales= Eg_egreso_final::all('id', 'peso_neto_total', 'peso_saborizante', 'peso_merma', 'empacado', 'lote_fundas', 'fundas', 'lote_carton', 'carton', 'peso_bruto', 'peso_neto', 'merma', 'diferencia', 'total_preempaque', 'lote', 'cod_empque', 'persona')->where('lote',$lote)->where('cod_empque',$cod_empaque);
        */
           // dd($egreso_finales);
       //

        /////////**********************este cogido habilitarlo solo para ver como queda el pdf este sera el codigo final que debe quedar habilitado puedes usar este codigo para ver directamento como va quedando el pdf, solo que demora mas en renderizar
        /*
        $view = view('ingreso_encabezado.encabezado_produccion_pdf',compact('ingreso_encabezados','ingreso_tachos'));
        $pdf = \App::make ('dompdf.wrapper');
        $pdf -> loadHTML($view);
        return $pdf->stream('ingreso_encabezados','ingreso_tachos');*/
        //// ********** este es el codigo que retorna la vista normal 
       return view('ingreso_encabezado.encabezado_produccion_pdf',compact('ingreso_encabezados','ingreso_tachos'));
    }

}
