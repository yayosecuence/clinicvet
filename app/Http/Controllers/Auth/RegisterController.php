<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   $request = app('request');
        if($request->hasFile('Foto')){
            $datosPersona['Foto']=$request->file('Foto')->store('Img_persona','public');
        }
        
        return User::create([
            
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'manzana' => $data['manzana'],
            'num_casa' => $data['num_casa'],
            'tipo_persona' => $data['tipo_persona'],
            'cedula' => $data['cedula'],
            'ciudad' => $data['ciudad'],
            'telefono' => $data['telefono'],
            'urbanizacion' => $data['urbanizacion'],
            'Foto' => $datosPersona['Foto'],
            'estado' => $data['estado'],
            'confirmacion' => $data['confirmacion'],
            'pago' => $data['pago'],
        ]);
    }

    
}
