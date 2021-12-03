<?php

namespace App\Http\Controllers;

use App\Eg_egreso_tachos_encabezado;
use App\Eg_egreso_tachos;
use App\Eg_egreso_final;
use App\Eg_cod_egresos;
use App\Eg_codigos_lotes;
use Illuminate\Http\Request;
use Response;
use App\json_values;
use App\Eg_marcas;
use App\Eg_producto_egreso;
use App\Eg_gramaje;
use App\RetornoFirmaProveedores;
use App\RetornoProveedores;
use App\Models\User;
use App\ing_kg_tacho;
use Illuminate\Support\Facades\DB;


class EgEgresoTachosEncabezadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $datos['egresosencabezado']=Eg_egreso_tachos_encabezado::paginate(10);
        return view('egresosencabezado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $lote=Eg_codigos_lotes::all('lote');
       $cod_egreso=Eg_cod_egresos::all('cod_egreso');
        $gramaje=Eg_gramaje::all('gramaje');
         $marcas=Eg_marcas::all('marcas');
         // $producto=Eg_cod_egresos::all('producto');
          // $horario=Eg_cod_egresos::all('horario');
        return view('egresosencabezado.create',compact('lote','cod_egreso','gramaje','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosEgresos=request()->except('_token');
        
         $datoscodegresos=request()->except('_token');

         $fillable = Eg_cod_egresos::create([
            'cod_egreso' => $datoscodegresos['codigo_empaque'],
            'estado' => '0',
            'cod_lote' => $datoscodegresos['lote'],
            'persona' => $datoscodegresos['persona'],
        
        ]);

        Eg_egreso_tachos_encabezado::insert($datosEgresos);
        

        //return  response()->json($fillable);
        return redirect('egresosencabezado')->with('Mensaje','Datos encabezado Pre-Empaque agregado con exito.');
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eg_egreso_tachos_encabezado  $eg_egreso_tachos_encabezado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $egresosencabezado= Eg_egreso_tachos_encabezado::findOrFail($id);
        return view('egresosencabezado.egrestachos',$egresosencabezado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eg_egreso_tachos_encabezado  $eg_egreso_tachos_encabezado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eg_egreso_tachos_encabezado $eg_egreso_tachos_encabezado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eg_egreso_tachos_encabezado  $eg_egreso_tachos_encabezado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $eliminar= Eg_egreso_tachos_encabezado::findOrFail($id);
         Eg_egreso_tachos_encabezado::destroy($id);
        return redirect('egresosencabezado')->with('Mensaje','Datos Eliminados con exito.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eg_egreso_tachos_encabezado  $eg_egreso_tachos_encabezado
     * @return \Illuminate\Http\Response
     */
    public function egrestachos($id)
    {

        $egresosencabezado= Eg_egreso_tachos_encabezado::findOrFail($id);
        $lotes=$egresosencabezado->lote;
        $codigos=$egresosencabezado->codigo_empaque;
        $fecha=$egresosencabezado->fecha_empaque;
        // dd($lotes);

        return view('egresosencabezado.egrestachos',compact('egresosencabezado','lotes','codigos','fecha'));
    }
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {      
        $inputs=$request->all();
        
        foreach ($request->cod_tacho as $key => $data ) 
        {
            $values=[
                "lote" => $request->lote,
                "codigo_empaque" => $request->codigo_empaque,
                "observacion" => $request->observacion,
                "cod_tacho" => $data,
                "kg_descontar" => $request->kg_descontar[$key]
            ];
            Eg_egreso_tachos::create($values); 
           // dump("guardado"); para ver datos 1 a 1
        }
       // dd("finish");


            /*$datospreempaque[$datos]['cod_tacho']= $request->cod_tacho;
            $datospreempaque[$datos]['marca_producto']= '';
            $datospreempaque[$datos]['kg_descontar']= $request->kg_descontar;
            $datospreempaque[$datos]['observacion']= $request->observacion;
            $datospreempaque[$datos]['codigo_empaque']= $request->codigo_empaque;
            $datospreempaque[$datos]['lote']= $request->lote;*/

        //dd($datospreempaque);
        Eg_egreso_tachos::insert($datospreempaque); 

        //DB::table('eg_egreso_tachos')->insert($datospreempaque)->get(); 
  
        return redirect('egresosencabezado');
        //->with('Mensaje','tachos agregados.');
    }


     public function show($documento)
    {  
        $re_proves = RetornoProveedores::all('id','cod_tachos','marca_producto','kg_descontar','observacion','documento')->where('documento',$documento);
        $re_firmas = RetornoFirmaProveedores::all('id','cedula','nombre','placa','fecha','documento','nombre_tra'   )->where('documento',$documento);

       // dd($ingresos);
       $view = view('egresosencabezado.show',compact('re_proves','re_firmas'));
        $pdf = \App::make ('dompdf.wrapper');
        $pdf -> loadHTML($view);
        return $pdf->stream('ingresos','egresos');

        // return view('egresosencabezado.show',compact('re_proves','re_firmas'));
    }

    public function empaque_pdf($lote,$cod_empaque)
    {  
        $egreso_encabezados= Eg_egreso_tachos_encabezado::all('id', 'codigo_empaque', 'fecha_empaque', 'lote', 'horario', 'marca', 'gramaje', 'saborizante', 'lt_saborizante', 'colgadores', 'ganchos', 'etiquetas', 'cajas', 'unidad_cajas', 'orden_produccion', 'juliano', 'producto', 'num_mesa', 'persona')->where('lote',$lote)->where('codigo_empaque',$cod_empaque);
       // dd($egreso_encabezados->mapWithKeys(function($elemento) {return [ 'lote' => $elemento->lote];
//}));

        $egreso_tachos= Eg_egreso_tachos::all('id','cod_tacho', 'marca_producto','kg_descontar', 'observacion', 'codigo_empaque', 'lote')->where('lote',$lote)->where('codigo_empaque',$cod_empaque);

       
        $egreso_finales= Eg_egreso_final::all('id', 'peso_neto_total', 'peso_saborizante', 'peso_merma', 'empacado', 'lote_fundas', 'fundas', 'lote_carton', 'carton', 'peso_bruto', 'peso_neto', 'merma', 'diferencia', 'total_preempaque', 'lote', 'cod_empque', 'persona')->where('lote',$lote)->where('cod_empque',$cod_empaque);
           // dd($egreso_finales);
       //

        /////////**********************este cogido habilitarlo solo para ver como queda el pdf este sera el codigo final que debe quedar habilitado puedes usar este codigo para ver directamento como va quedando el pdf, solo que demora mas en renderizar

       $view = view('egresosencabezado.empaque_pdf',compact('egreso_encabezados','egreso_tachos','egreso_finales'));
        $pdf = \App::make ('dompdf.wrapper');
        $pdf -> loadHTML($view);
        return $pdf->stream('egreso_encabezados','egreso_tachos','egreso_finales');
        //// ********** este es el codigo que retorna la vista normal 
       /* return view('egresosencabezado.empaque_pdf',compact('egreso_encabezados','egreso_tachos','egreso_finales'));*/
    }


 }
