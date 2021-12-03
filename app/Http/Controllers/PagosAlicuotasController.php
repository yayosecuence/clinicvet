<?php

namespace App\Http\Controllers;

use App\Pagos_alicuotas;
use Illuminate\Http\Request;
use App\Urbanizaciones;
use App\User;
use Auth;
use DB;

class PagosAlicuotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos['pagos_alicuotas']=Pagos_alicuotas::paginate(100);
    return view('pagos_alicuotas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        $id = Auth::id();
        $personas=User::all('urbanizacion','name','cedula','tipo_persona');
        return view('pagos_alicuotas.create',compact('urbanizaciones','id','personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

      

         $urba=$request->urbanizacion;
         $fech=$request->dia_pago;
        $name_per=$request->personas;

        $ene='Enero';
        $feb='Febrero';
        $mar='Marzo';
        $abr='Abril';
        $may='Mayo';
        $jun='Junio';
        $jul='Julio';
        $ago='Agosto';
        $sep='Septiembre';
        $oct='Octubre';
        $nov='Noviembre';
        $dic='Diciembre';

        foreach($name_per as $id){

        $existencia = DB::table('pagos_alicuotas')
        ->select('nombre_persona')
        ->where('nombre_persona', '=', $id)
        ->get();
//dd($existencia);
       
        if (count($existencia) >= 1)
        { 
               
                         $ids = Pagos_alicuotas::where('nombre_persona', '=', $id)->first();
                
              $ids->nombre_persona=$id;
              $ids->urbanizacion=$urba;
               if( $fech=='Enero'){
         $ids->ene=$ene;
      
        }else if( $fech=='Febrero'){
        
         $ids->feb=$feb;
       
        }else if( $fech=='Marzo'){
        
         $ids->mar=$mar;
       
        }else if( $fech=='Abril'){
         
         $ids->abr=$abr;
        
        }else if( $fech=='Mayo'){
          
         $ids->may=$may;
        
        }else if( $fech=='Junio'){
        
         $ids->jun=$jun;
        
        }else if( $fech=='Julio'){
        
         $ids->jul=$jul;
        
        }else if( $fech=='Agosto'){
         
         $ids->ago=$ago;
        
        }else if( $fech=='Septiembre'){
        
         $ids->sep=$sep;
        
        }else if( $fech=='Octubre'){
         
         $ids->oct=$oct;
        
        }else if( $fech=='Noviembre'){
          
         $ids->nov=$nov;
        
        }else if( $fech=='Diciembre'){
          
         $ids->dic=$dic;
        }
              $ids->save();
    
            // return json_encode( ' listo');
            //  return redirect('pagos_alicuotas')->with('Mensaje','Modificacion realizada con exito.');
             
        }
    

        else{
           // dd($id);
             $ids=new Pagos_alicuotas();
        $ids->nombre_persona=$id;
        $ids->urbanizacion=$urba;
        
        
        if( $fech=='Enero'){
         $ids->ene=$ene;
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Febrero'){
         $ids->ene=' ';
         $ids->feb=$feb;
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Marzo'){
          $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=$mar;
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Abril'){
          $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=$abr;
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Mayo'){
          $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=$may;
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Junio'){
         $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=$jun;
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Julio'){
         $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=$jul;
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Agosto'){
          $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=$ago;
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Septiembre'){
         $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=$sep;
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Octubre'){
          $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=$oct;
         $ids->nov=' ';
         $ids->dic=' ';
        }else if( $fech=='Noviembre'){
          $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=$nov;
         $ids->dic=' ';
        }else if( $fech=='Diciembre'){
          $ids->ene=' ';
         $ids->feb=' ';
         $ids->mar=' ';
         $ids->abr=' ';
         $ids->may=' ';
         $ids->jun=' ';
         $ids->jul=' ';
         $ids->ago=' ';
         $ids->sep=' ';
         $ids->oct=' ';
         $ids->nov=' ';
         $ids->dic=$dic;
        }
 $ids->save();
       
        }
       

    }
    //hasta aqui todo guradado en adelante depende de ti
   //return redirect()->back();

       // $datosPagosAlicuotas=request()->except('_token');
        //foreach($datosPagosAlicuotas as $id){
        //Pagos_alicuotas::insert($id);
            
        //return  response()->json($id);
        return redirect('pagos_alicuotas')->with('Mensaje','Imagen agregada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pagos_alicuotas  $pagos_alicuotas
     * @return \Illuminate\Http\Response
     */
    public function show(Pagos_alicuotas $pagos_alicuotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pagos_alicuotas  $pagos_alicuotas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagosalicuotas= Pagos_alicuotas::findOrFail($id);
        $urbanizaciones=Urbanizaciones::all('nombre_urbanizacion');
        return view('pagos_alicuotas.edit',compact('pagosalicuotas','urbanizaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pagos_alicuotas  $pagos_alicuotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPagosAlicuotas=request()->except(['_token','_method']);
          //dd($id);
         Pagos_alicuotas::where('id','=',$id)->update($datosPagosAlicuotas);
         //$carrousell= Carrousell::findOrFail($id);

        //return view('carrousell.edit',compact('carrousell'));
        return redirect('pagos_alicuotas')->with('Mensaje','Modificacion realizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pagos_alicuotas  $pagos_alicuotas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar= Pagos_alicuotas::findOrFail($id);
         Pagos_alicuotas::destroy($id);
        return redirect('pagos_alicuotas')->with('Mensaje','Datos Eliminados con exito.');
    }
}
