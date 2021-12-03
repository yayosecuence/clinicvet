<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\carrousell;
use App\User;
use Mail;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

       // $carrousell=carrousell::all('Foto','nombre_foto','id','descripcion_foto');
       // $persona=User::all('Foto','name','tipo_persona');
        
        return view('welcome');
    }

    public function email(Request $request){
        $subject = "Pedir informacion";
        $for = "servicioalcliente@mypropertyadmin.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("servicioalcliente@mypropertyadmin.com","Cliente interesado");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}