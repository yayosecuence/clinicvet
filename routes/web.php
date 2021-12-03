<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');

//Route::get('/carrousell', 'CarrousellController@index');

//Route::get('/carrousell/create', 'CarrousellController@create');
Route::resource('carrousell', 'CarrousellController')->middleware('auth');;
Route::resource('urbanizaciones', 'UrbanizacionesController')->middleware('auth');
Route::resource('horarios_limpiezas', 'HorariosLimpiezaController')->middleware('auth');
Route::resource('urbanizaciones', 'UrbanizacionesController')->middleware('auth');
Route::resource('pagos_alicuotas', 'PagosAlicuotasController')->middleware('auth');
Route::resource('horarios_reuniones', 'HorariosReunionesController')->middleware('auth');
Route::resource('horarios_basuras', 'HorariosBasuraController')->middleware('auth');
Route::resource('noticias_urbanizacions', 'NoticiasUrbanizacionController')->middleware('auth');
Route::resource('ingresos', 'IngresoController')->middleware('auth');
Route::resource('egresos', 'EgresoController')->middleware('auth');
Route::resource('egresosencabezado', 'EgEgresoTachosEncabezadoController')->middleware('auth');
Route::resource('incidencias', 'IncidenciasController')->middleware('auth');
Route::resource('subirpdf', 'SubirpdfController')->middleware('auth');
Route::resource('idvataciones', 'IdvatacionesController')->middleware('auth');
Route::resource('idencuesta', 'IdencuestaController')->middleware('auth');
Route::resource('encuestas', 'EncuestasController')->middleware('auth');
Route::resource('votaciones', 'VotacionesController')->middleware('auth');
Route::resource('tokenes', 'TokenesController')->middleware('auth');
Route::resource('actualizacionpagos', 'ActualizacionPagoController')->middleware('auth');
Route::resource('resultadosvotos', 'ResultadosvotosController')->middleware('auth');
Route::resource('listados', 'ListadosController')->middleware('auth');
Route::resource('terminos', 'TerminosController')->middleware('auth');
Route::resource('reglamentos', 'ReglamentosController')->middleware('auth');
Route::resource('carrouselldos', 'CarrouselldosController')->middleware('auth');
Route::resource('ingreso_encabezado', 'EncabezadoTachoController')->middleware('auth');
Route::resource('ingreso_producto', 'IngProductoController')->middleware('auth');
Route::resource('ingreso_tipo_producto', 'IngTipoProductoController')->middleware('auth');
Route::resource('ingreso_tipo_aceite', 'IngTipoAceiteController')->middleware('auth');
Route::resource('ingreso_tipo_sal', 'IngTipoSalController')->middleware('auth');
Route::resource('ingreso_porciento_sal', 'PocientoSalController')->middleware('auth');
Route::resource('ingreso_medida_producto', 'MedidaProductoController')->middleware('auth');
Route::resource('observacion_tachos', 'IngObservacionTachoController')->middleware('auth');
Route::resource('calificacion_tachos', 'IngCalificacionTachoController')->middleware('auth');
Route::resource('ingreso_grupo', 'IngGrupoTrabajoController')->middleware('auth');
Route::resource('ingreso_freidora', 'IngFreidoraController')->middleware('auth');
Route::resource('ingreso_equipo', 'IngEquipoController')->middleware('auth');
Route::resource('ingreso_tipo_produccion', 'IngTipoTachoController')->middleware('auth');

Route::resource('gramaje', 'EgGramajeController')->middleware('auth');
Route::resource('nomproductoseg', 'EgProductoEgresoController')->middleware('auth');
Route::resource('marcaseg', 'EgMarcasController')->middleware('auth');

Route::get('/egresosencabezado/getcodegreso', 'EgEgresoTachosEncabezadoController@getcodegreso')->name('getcodegreso');

Route::get('/egresosencabezado/{id}/egrestachos', 'EgEgresoTachosEncabezadoController@egrestachos')->name('egrestachos')->middleware('auth');
Route::get('/store2', 'EgEgresoTachosEncabezadoController@store2')->name('store2')->middleware('auth');

Route::patch('/update2/{id}', 'HorariosReunionesController@update2')->name('update2')->middleware('auth');
Route::post('/email', 'WelcomeController@email')->name('email');

Route::patch('/updatecontra', 'HorariosReunionesController@updatecontra')->name('updatecontra')->middleware('auth');
Route::get('/{id}/contra', 'HorariosReunionesController@contra')->name('contra')->middleware('auth');
Route::get('/panelcontrol', 'TerminosController@panelcontrol')->name('panelcontrol')->middleware('auth');
Route::get('/gadmunicipal', 'TerminosController@gadmunicipal')->name('gadmunicipal')->middleware('auth');

Route::get('/extraer_noti/{urbanizacion}', 'NoticiasUrbanizacionController@extraer_noti')->name('extraer_noti');
Route::get('/extraer_alicuotas/{urbanizacion}', 'NoticiasUrbanizacionController@extraer_alicuotas')->name('extraer_alicuotas');
Route::get('/extraer_ingresos/{urbanizacion}', 'NoticiasUrbanizacionController@extraer_ingresos')->name('extraer_ingresos');
Route::get('/extraer_egresos/{urbanizacion}', 'NoticiasUrbanizacionController@extraer_egresos')->name('extraer_egresos');
Route::get('/extraer_carrousel2', 'NoticiasUrbanizacionController@extraer_carrousel2')->name('extraer_carrousel2');
Route::get('publisher/getcodegreso', 'EgEgresoTachosEncabezadoController@getcodegreso')->name('getcodegreso');
Route::get('/show/{id}/{anio}/{nombre_urbanizacion}', 'NoticiasUrbanizacionController@show')->name('show');

Route::get('/egresosencabezado/show/{documento}', 'EgEgresoTachosEncabezadoController@show')->name('show');
Route::get('/egresosencabezado/empaque_pdf/{lote}/{cod_empaque}', 'EgEgresoTachosEncabezadoController@empaque_pdf')->name('empaque_pdf');

Route::get('/ingresoencabezado/show/{documento}', 'EncabezadoTachoController@show')->name('show');
Route::get('/ingresoencabezado/pre_produccion_pdf/{codigo_encabezado}', 'EncabezadoTachoController@pre_produccion_pdf')->name('pre_produccion_pdf');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**********SERVICIOS******/
Route::get('/urlService1', 'ServiciosController@obtenerDato')->name('service1');
