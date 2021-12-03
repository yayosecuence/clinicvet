<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\carrousell;
use App\Carrouselldos;
use Auth;
use App\Pagos_alicuotas;
use App\Noticias_urbanizacion;
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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
       /* $carrousell=carrousell::all('Foto','nombre_foto','id','descripcion_foto');
         $carrouselldos=Carrouselldos::all('Foto','nombre_foto','id','descripcion_foto','id');
        $pagosalicuotas=Pagos_alicuotas::all('nombre_persona','urbanizacion','ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic');
       
        
        $noticiasurbanizaciones = Noticias_urbanizacion::orderBy('id', 'DESC')->get();
      
        $horariosreuniones=Horarios_reuniones::all('hora','dia','motivo','urbanizacion');
        $horarioslimpiezas=Horarios_limpieza::all('hora','dia','urbanizacion');
        $horariosbasuras=Horarios_basura::all('hora','dia','urbanizacion');
        $horariosbasuras=Horarios_basura::paginate(4);
        $ingresos=Ingreso::all('nombre_urbanizacion','monto','motivo','mes','anio','Foto');
        $egresos=Egreso::all('nombre_urbanizacion','monto','motivo','mes','anio','Foto');
        $incidencias=Incidencias::all('nombre_urbanizacion','insidencia','descripcion_insidencia','fecha','estado','Foto');
        $subirpdfs=Subirpdf::all('urbanizacion','nombre_pdf','pdf');
        $tokenes=Tokenes::all('estado','usuario','urbanizacion');
         $terminos=Terminos::all('urbanizacion','confirmacion','cedula');
        $persona=User::where('id',$id)->first();//trabaja a ver que error te sale
        //dd($carrousell);
         $jbuttrones=Actualizacion_pago::all('urbanizacion','noticia','reglamento','carrousell');
          $noticiajbuttrones=Notificaciones::all('urbanizacion','tipo_notificacion','noticia');*/
           //$gadmunicipales=Gadmunicipales::all('cedula');
        return view('home');
    }
}
