@extends('layouts.app')

@section('content')
<script>
$(document).ready(function(){
$(".boton").click(function(){

var xmlhttp = new XMLHttpRequest();
var xmlhttp2 = new XMLHttpRequest();
var valores=document.getElementById('name').value;
var valores2="";
var valores3="Desactivado";
var valores4=document.getElementById('urbanizacion').value;

xmlhttp2.open("GET", "http://localhost:8080/skylar/servicios/insert_token.php?id=&usuario="+valores+"&token="+valores2+"&estado="+valores3+"&urbanizacion="+valores4, true);
xmlhttp2.send();


});

});
</script>

<script>
function Pluss(){
var urr=document.getElementById('cedula').value;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    document.getElementById("name").innerHTML = myObj[0].name;
    
  }
};
xmlhttp.open("GET", "https://mypropertyadmin.com/servicios/cedula.php?ci="+urr, true);
xmlhttp.send();}
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        

                         <div class="form-group row">
                            <label for="manzana" class="col-md-4 col-form-label text-md-right">{{'manzana'}}</label>

                            <div class="col-md-6">
                                <input id="manzana" type="text" class="form-control @error('manzana') is-invalid @enderror" name="manzana" value="{{ old('manzana') }}" required autocomplete="manzana" autofocus>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="num_casa" class="col-md-4 col-form-label text-md-right">{{'num_casa'}}</label>

                            <div class="col-md-6">
                                <input id="num_casa" type="text" class="form-control @error('num_casa') is-invalid @enderror" name="num_casa" value="{{ old('num_casa') }}" required autocomplete="num_casa" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_persona" class="col-md-4 col-form-label text-md-right">{{' Tipo de persona'}}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="tipo_persona" id="tipo_persona" value="">
                                  @if ( Auth::user()->tipo_persona=='Desarrollador - Administrador')
                                 
                                  <option>Desarrollador - Administrador</option>
                                  <option>Administrador urbanizacion</option>
                                  <option>inquilino</option>                                  
                                   @else
                                   <option>Administrador urbanizacion</option>
                                   <option>inqulino</option>
                                   @endif
                                </select>
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="cedula" class="col-md-4 col-form-label text-md-right">{{' Cedula'}}</label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input id="cedula" type="text" class="form-control" name="cedula" >
                                    <div class="input-group-append">
                                      <span type="button" class="btn btn-link" onclick="Pluss();">Buscar 
                                      </span>
                                    </div>
                                  </div>   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{' Ciudad'}}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="ciudad" id="ciudad" value="">
                                  
                                  <option>Portoviejo</option>
                                  <option>Manta</option>
                                  <option>Chone</option>
                                  
                                </select>
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{' Telefono/movil'}}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono">
                            </div>
                        </div>

                     
                        <div class="form-group row">
                            <label for="Foto" class="col-md-4 col-form-label text-md-right">{{'Foto'}}</label>

                            <div class="col-md-6">
                                <input id="Foto" type="file" class="form-control" name="Foto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{' Estado'}}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="estado" id="estado" value="">
                                 
                                  <option>Desactivado</option>
                                 
                                </select>
                            </div>
                        </div>

                         
                       
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="boton btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
