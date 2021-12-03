<?php
//VERIFICACION INGRESO ////////////////////////////////////////////////////////////////////////**********************
if(!isset($_REQUEST['ci'])) {
    header('Content-Type: application/json');
    echo json_encode(array(array(
        'error'=>'Es requerido un dato',
    	'identity'=>null,
    	'name'=>null,
    	'genre'=>null,
    	'dob'=>null,
    	'nationality'=>null,
    	'residence'=>null,
    	'streets'=>null,
    	'homenumber'=>null,
    	'fingerprint'=>null,
    	'civilstate'=>null
    	)));
    	exit(0);
}

//VARIABLES ////////////////////////////////////////////////////////////////////////**********************
global $nombrecookie; 
$nombrecookie=generarcookie(10);
include 'imagenes/variables.php';

//CONSULTAMOS RUC ////////////////////////////////////////////////////////////////////////**********************
if(strlen($_REQUEST['ci'])==13){
    $alfanumerico=generaralfanumerico(10);
	$jsoncaptcha = getUrl('https://declaraciones.sri.gob.ec/sri-captcha-servicio-internet/captcha/start/5?r='.$alfanumerico);
	$captchas = json_decode($jsoncaptcha, true);
	$captchaname = html_entity_decode($captchas['imageName']);
	$captchaid = $captchas['imageFieldName'];
	$captchas=$captchas['values'];
	$imagenlocal=md5( file_get_contents($imagenes[$captchaname]) );
	for ($i=0;$i<5;$i++) {
		$imagenserver = md5( getUrl('https://declaraciones.sri.gob.ec/sri-captcha-servicio-internet/captcha/image/'.$i.'?r='.$alfanumerico) ); //recorre las 5 imagenes generadas por el captcha
		if($imagenserver==$imagenlocal){
			$captcharesult=$captchas[$i];
			break;
		} 
	}
	
	$jsonautenticacion = getUrl("https://declaraciones.sri.gob.ec/sri-captcha-servicio-internet/rest/ValidacionCaptcha/validarCaptcha/" .$captcharesult . "?emitirToken=true");
	$arr_autenticacion = json_decode($jsonautenticacion, true);
	$autenticacion = utf8_encode($arr_autenticacion['mensaje']);
    
	$json_string1= getUrl('https://declaraciones.sri.gob.ec/sri-catastro-sujeto-servicio-internet/rest/ConsolidadoContribuyente/obtenerPorNumerosRuc?&ruc='.$_REQUEST['ci'],null, null,null, $autenticacion);
	$json_string2= getUrl('https://declaraciones.sri.gob.ec/sri-catastro-sujeto-servicio-internet/rest/Establecimiento/consultarPorNumeroRuc?numeroRuc='.$_REQUEST['ci'],null, null,null, $autenticacion);


	if(strlen($json_string1)>0){
		$json_string1=json_decode($json_string1,true);
		$json_string2=json_decode($json_string2,true);
	}else{
		header('Content-Type: application/json');
	    echo json_encode(array(false,
	    	1=>array(
		    	'numeroRuc'=>null,
		    	'razonSocial'=>null,
		    	'nombreComercial'=>null,
		    	'estadoPersonaNatural'=>null,
		    	'estadoSociedad'=>null,
		    	'claseContribuyente'=>null,
		    	'obligado'=>null,
		    	'actividadContribuyente'=>null,
		    	'informacionFechasContribuyente'=>null,
		    	'representanteLegal'=>null,
		    	'agenteRepresentante'=>null,
		    	'personaSociedad'=>null,
		    	'subtipoContribuyente'=>null,
		    	'motivoCancelacion'=>null,
		    	'motivoSuspension'=>null,
	    	),
	    	2=>array(
		    	'nombreFantasiaComercial'=>null,
		    	'tipoEstablecimiento'=>null,
		    	'direccionCompleta'=>null,
		    	'estado'=>null,
		    	'numeroEstablecimiento'=>null,
	    	)
	    ));
	    eliminarcookiefile();
    	exit(0);
	}


	$jsonfull = array_merge(array(true) ,$json_string1, $json_string2);

	header('Content-Type: application/json');
	echo json_encode($jsonfull);
	eliminarcookiefile();
	exit(0);

}elseif(strlen($_REQUEST['ci'])==10) { ////////////////CONSULTAMOS CEDULA
	//GET DATOS MDI ////////////////////////////////////////////////////////////////////////**********************

	$loginFields = array('tipo' => 'getDataWsRc', 'ci' => $_REQUEST['ci']); //"tipo=getDataWsRc&ci=".$_REQUEST['ci']; //
	$json_string= getUrl('http://www.mdi.gob.ec/gestorcertificados/antecedentes/data.php', 'post', $loginFields, 5);
							//http://www.mdi.gob.ec/minterior1/antecedentes/data.php
	if(strlen($json_string)>0){
		//en caso de error devuelve la cedula consultada
		$json_string=str_replace( '"identity":""', '"identity":"'.$_REQUEST['ci'].'"',$json_string);
		header('Content-Type: application/json');
		echo $json_string;
		eliminarcookiefile();
		exit(0);
	}

	//GET DATOS ANT ////////////////////////////////////////////////////////////////////////**********************

	$remote_page_content= getUrl('https://sistemaunico.ant.gob.ec:5038/PortalWEB/paginas/clientes/clp_grid_citaciones.jsp?ps_tipo_identificacion=CED&ps_identificacion='.$_REQUEST['ci']);

	if(substr_count($remote_page_content,'<td colspan="1" class="titulo1">')!=0) {
		$posini=strpos($remote_page_content, '<td colspan="1" class="titulo1">') + strlen('<td colspan="1" class="titulo1">');
		$posfin=strpos($remote_page_content, '&nbsp;', $posini);
		$datos = substr($remote_page_content, $posini, ($posfin - $posini));

		header('Content-Type: application/json');
		echo json_encode(array_map('utf8_encode',array(array(
		    'error'=>null,
			'identity'=>$_REQUEST['ci'],
			'name'=>$datos,
			'genre'=>null,
			'dob'=>null,
			'nationality'=>null,
			'residence'=>null,
			'streets'=>null,
			'homenumber'=>null,
			'fingerprint'=>null,
			'civilstate'=>null
			))));
		eliminarcookiefile();
	    exit(0);
	}



	//GET DATOS SOCIO EMPLEO ////////////////////////////////////////////////////////////////////////**********************

	$loginUrl='http://www.socioempleo.gob.ec/socioEmpleo-war/paginas/registro/aspirante/registroAspirante.jsf';
	$remote_page_content= getUrl($loginUrl);


	$posini=strpos($remote_page_content, 'javax.faces.ViewState:0" value="') + strlen('javax.faces.ViewState:0" value="');
	$posfin=strpos($remote_page_content, '" autocomplete', $posini);
	$get_viewstate = substr($remote_page_content, $posini, ($posfin - $posini));


	$loginFields = array('formRegistraAspirante:apeMat'=>'','formRegistraAspirante:apePat'=>'','formRegistraAspirante:ciudad_focus'=>'','formRegistraAspirante:ciudad_input'=>'','formRegistraAspirante:mail'=>'','formRegistraAspirante:primerNombre'=>'','formRegistraAspirante:provincia_focus'=>'','formRegistraAspirante:provincia_input'=>'','formRegistraAspirante:segundoNombre'=>'','formRegistraAspirante:tipoDoc_focus'=>'','formRegistraAspirante' => 'formRegistraAspirante','formRegistraAspirante:tipoDoc_input' => '11166','javax.faces.behavior.event' => 'blur','javax.faces.partial.ajax' => 'true','javax.faces.partial.event' => 'blur','javax.faces.partial.execute' => 'formRegistraAspirante:numDoc','javax.faces.partial.render' => 'formRegistraAspirante','javax.faces.source' => 'formRegistraAspirante:numDoc','formRegistraAspirante:numDoc' => $_REQUEST['ci'], 'javax.faces.ViewState' => $get_viewstate);
	$remote_page_content=getUrl($loginUrl, 'post', $loginFields);

	//obtiene los datos en una variable ////////////////////////////////////////////////////////////////////////**********************
	if(substr_count($remote_page_content,'ya perteneces a la Red Socio Empleo')>=1) {

		$posini=strpos($remote_page_content, 'msgs:[{summary:"') + strlen('msgs:[{summary:"');
		$posfin=strpos($remote_page_content, '  ya perteneces', $posini);
		$datos = substr($remote_page_content, $posini, ($posfin - $posini));

	}elseif(substr_count($remote_page_content,'apePat" type="text" value=""')>=1) {
		//GENERACIÓN DE ERROR NO EXISTE ////////////////////////////////////////////////////////////////////////**********************
		header('Content-Type: application/json');
		echo json_encode(array(array(
		    'error'=>"La cedula no existe",
			'identity'=>$_REQUEST['ci'],
			'name'=>null,
			'genre'=>null,
			'dob'=>null,
			'nationality'=>null,
			'residence'=>null,
			'streets'=>null,
			'homenumber'=>null,
			'fingerprint'=>null,
			'civilstate'=>null
			)));
		eliminarcookiefile();
		exit(0);
	}else{
		//CONSULTAMOS SI EXISTE
		//OBTIENE apellido
		$posini=strpos($remote_page_content, 'apePat" type="text" value="') + strlen('apePat" type="text" value="');
		$posfin=strpos($remote_page_content, '" maxlength', $posini);
		$apel_p = substr($remote_page_content, $posini, ($posfin - $posini));

		//OBTIENE materno
		$posini=strpos($remote_page_content, 'apeMat" type="text" value="') + strlen('apeMat" type="text" value="');
		$posfin=strpos($remote_page_content, '" maxlength', $posini);
		$apel_m = substr($remote_page_content, $posini, ($posfin - $posini));

		//OBTIENE nombre 1
		$posini=strpos($remote_page_content, 'primerNombre" type="text" value="') + strlen('primerNombre" type="text" value="');
		$posfin=strpos($remote_page_content, '" maxlength', $posini);
		$nomb_1 = substr($remote_page_content, $posini, ($posfin - $posini));

		//OBTIENE nombre 2
		$posini=strpos($remote_page_content, 'segundoNombre" type="text" value="') + strlen('segundoNombre" type="text" value="');
		$posfin=strpos($remote_page_content, '" maxlength', $posini);
		$nomb_2 = substr($remote_page_content, $posini, ($posfin - $posini));

		$datos=$nomb_1." ".$nomb_2." ".$apel_p." ".$apel_m;
	}

	header('Content-Type: application/json');
	echo json_encode(array_map('utf8_encode',array(array(
	    'error'=>null,
		'identity'=>$_REQUEST['ci'],
		'name'=>$datos,
		'genre'=>null,
		'dob'=>null,
		'nationality'=>null,
		'residence'=>null,
		'streets'=>null,
		'homenumber'=>null,
		'fingerprint'=>null,
		'civilstate'=>null
		))));
}else{
	//GENERACIÓN DE ERROR NO EXISTE ////////////////////////////////////////////////////////////////////////**********************
	header('Content-Type: application/json');
	echo json_encode(array(array(
	    'error'=>"Cedula o ruc incompleto",
		'identity'=>$_REQUEST['ci'],
		'name'=>null,
		'genre'=>null,
		'dob'=>null,
		'nationality'=>null,
		'residence'=>null,
		'streets'=>null,
		'homenumber'=>null,
		'fingerprint'=>null,
		'civilstate'=>null
		)));
	eliminarcookiefile();
	exit(0);
}

eliminarcookiefile();
//Simple funcion para acceder
function getUrl($url, $method='', $vars='', $time=2, $Authorization = '') 
{
	$fields = (is_array($vars)) ? http_build_query($vars) : $vars;
    $ch = curl_init();
    if ($method == 'post') 
    {
    curl_setopt ($ch, CURLOPT_POST, true); //1
    curl_setopt ($ch, CURLOPT_POSTFIELDS, $fields);
    }
    
    if (!empty($Authorization)) 
	{
		//$arr_header = array('Authorization: ' . $Authorization, 'Content-Type: application/json');
		$arr_header;
		$arr_header[0] = 'Authorization: ' . $Authorization;
		$arr_header[1] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $arr_header);
	}

    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); //1
    //curl_setopt ($ch, CURLOPT_HEADER, 1); //esta no iba lo que hace es mostrar el header de la respuesta en la salida
    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0");
    curl_setopt ($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/'.$GLOBALS['nombrecookie']);
    curl_setopt ($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/'.$GLOBALS['nombrecookie']);
    curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt ($ch, CURLOPT_TIMEOUT, $time);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $time);
    curl_setopt ($ch, CURLOPT_FAILONERROR, false);//tenia true  si es mayor a 400 pero no debe fallar
    //curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response  = curl_exec($ch);
	//echo curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close ($ch);
    //echo $response; 
    return $response; 
}

//genera archivo con nombre aleatorio de longitud caracteres
function generarcookie($longitud) {
	$key = '';
	$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
	$max = strlen($pattern)-1;
	for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};

	$key=$key.'.txt';
	$archivo = fopen(dirname(__FILE__).'/'.$key,'a'); // se crea y se cierra
	fclose($archivo);
	return $key;
}

//eliminamos el archivo creado
function eliminarcookiefile(){
	unlink($GLOBALS['nombrecookie']);
}

function generaralfanumerico($longitud) {
		$key = '';
		$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
		$max = strlen($pattern)-1;
		for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
		return $key;
	}

?>