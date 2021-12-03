<?php

namespace App\Http\Controllers;

use App\Noticias_urbanizacion;
use Illuminate\Http\Request;
use App\Urbanizaciones;
use Illuminate\Support\Facades\Storage;
use Response;
use App\Pagos_alicuotas;
use App\Horarios_reuniones;
use App\Horarios_limpieza;
use App\Horarios_basura;
use App\Ingreso;
use App\Egreso;
use App\Incidencias;
use App\Subirpdf;
use App\Tokenes;
use App\Terminos;
use App\Notificaciones;
use App\Actualizacion_pago;
use App\Gadmunicipales;
use App\carrousell;
use App\Carrouselldos;
use App\json_values;

class NoticiasUrbanizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos['noticias_urbanizacions']=Noticias_urbanizacion::paginate(10);
    return view('noticias_urbanizacions.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('noticias_urbanizacions.create',compact('urbanizaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosNoticiasUrbanizaciones=request()->except('_token');
        if($request->hasFile('Foto')){         

            $datosNoticiasUrbanizaciones['Foto']=$request->file('Foto')->store('Img_noticias_ur','public');
        }
        Noticias_urbanizacion::insert($datosNoticiasUrbanizaciones);

        //return  response()->json($datosNoticiasUrbanizaciones);
        return redirect('noticias_urbanizacions')->with('Mensaje','Imagen agregada con exito.');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticias_urbanizacion  $noticias_urbanizacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticias_urbanizaciones= Noticias_urbanizacion::findOrFail($id);
         $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
       

        return view('noticias_urbanizacions.edit',compact('noticias_urbanizaciones','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticias_urbanizacion  $noticias_urbanizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $datosNoticias=request()->except(['_token','_method']);
          if($request->hasFile('Foto')){
            $noticias_urbanizacion= Noticias_urbanizacion::findOrFail($id);
            Storage::delete('public/'.$noticias_urbanizacion->Foto);
           

            $datosNoticias['Foto']=$request->file('Foto')->store('Img_noticias_ur','public');
        }

         //dd($id);
         Noticias_urbanizacion::where('id','=',$id)->update($datosNoticias);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('noticias_urbanizacions')->with('Mensaje','Imagen Moidificada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticias_urbanizacion  $noticias_urbanizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $noticias_urbanizacions= Noticias_urbanizacion::findOrFail($id);
        if(Storage::delete('public/'.$noticias_urbanizacions->Foto)){
        Noticias_urbanizacion::destroy($id);}

        return redirect('noticias_urbanizacions')->with('Mensaje','Noticia Eliminada con exito.');
    }

    public function extraer_noti($urbanizacion){
        $noticias= Noticias_urbanizacion::all()->where('urbanizacion',$urbanizacion);
        return Response::json(
           
            array(
                'success' => true,
                'message' => "noticias",
                'noticias_urbanizacions' => $noticias,
            ),200);
    }


    public function extraer_alicuotas($urbanizacion){
        $alicuotas= Pagos_alicuotas::all('nombre_persona','dia_pago','urbanizacion')->where('urbanizacion',$urbanizacion);
        
    return Response::json(
           
            array(
                'success' => true,
                'message' => "noticias",
                'alicuotas' => $alicuotas,
            ),200);

      }


    public function extraer_ingresos($urbanizacion){
        $ingresos= Ingreso::all()->where('nombre_urbanizacion',$urbanizacion);
        return Response::json(
           
            array(
                'success' => true,
                'message' => "noticias",
                'ingresos' => $ingresos,
            ),200);
    }


    public function extraer_egresos($urbanizacion){
        $egresos= Egreso::all()->where('nombre_urbanizacion',$urbanizacion);
        return Response::json(
           
            array(
                'success' => true,
                'message' => "noticias",
                'egresos' => $egresos,
            ),200);
    }


public function extraer_carrousel2(){
        $carousel= Carrouselldos::all('Foto');
        return Response::json(
           
            array(
                'success' => true,
                'message' => "noticias",
                'carousel' => $carousel,
            ),200);
    }


    public function show($id,$anio,$nombre_urbanizacion)
    {  
        $ingresos = Ingreso::all('id','nombre_urbanizacion','monto','motivo','mes','anio','Foto')->where('mes',$id)->where('anio',$anio)->where('nombre_urbanizacion',$nombre_urbanizacion);
        $egresos = Egreso::all('id','nombre_urbanizacion','monto','motivo','mes','anio','Foto')->where('mes',$id)->where('anio',$anio)->where('nombre_urbanizacion',$nombre_urbanizacion);

       // dd($ingresos);
        $view = view('subirpdf.show',compact('ingresos','egresos'));
        $pdf = \App::make ('dompdf.wrapper');
        $pdf -> loadHTML($view);
        return $pdf->stream('ingresos','egresos');
    }


     public function consulta_eg_codigos_lotes(){
        $lote= Pagos_alicuotas::all('id','lote');
        
    return Response::json(
           
            array(
                'success' => true,
                'message' => "noticias",
                'lote' => $lote,
            ),200);

      }
}
