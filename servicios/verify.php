<?php
global $nombrecookie; 
$nombrecookie=generarcookie(10);


$remote_page_content=getUrl('https://online.portoviejo.gob.ec/Consultas/Deudas.aspx');
$posini=strpos($remote_page_content, 'id="__EVENTVALIDATION" value="') + strlen('id="__EVENTVALIDATION" value="');
$posfin=strpos($remote_page_content, '"', $posini);
$dato1 = substr($remote_page_content, $posini, ($posfin - $posini));

$loginFields = array(
	'ctl00$MainContent$ScriptManager1' => 'ctl00$MainContent$UpdatePanel1|ctl00$MainContent$cmdBuscar', 
	'__EVENTTARGET' => '',
	'__EVENTARGUMENT' => '',
	'__VIEWSTATE' => '',
	'__EVENTVALIDATION' => $dato1,
	'ctl00$MainContent$txtCedula' => $_REQUEST['ci'],
	'__ASYNCPOST' => 'true',
    'ctl00$MainContent$cmdBuscar' => 'Consultar'); 
$respuesta= getUrl('https://online.portoviejo.gob.ec/Consultas/Deudas.aspx', 'post', $loginFields,10);


if (strpos($respuesta, "Usted no mantiene deudas pendientes de pago con el GAD Municipa") !== false){
    $response="No mantiene deudas";
}else{
    $posini=strpos($respuesta, '<table id="MainContent_tblDeudas"');
    $posfin=strpos($respuesta, 'table>', $posini) +strlen('table>');
    $response = substr($respuesta, $posini, ($posfin - $posini));
}


header('Content-Type: application/json');
echo json_encode(array("response"=>$response));
//echo $response;
eliminarcookiefile();
exit(0);
//Simple funcion para acceder
function getUrl($url, $method='', $vars='', $time=2, $Authorization = '') 
{
	$fields = (is_array($vars)) ? http_build_query($vars) : $vars;
    $ch = curl_init();
    if ($method == 'post') 
    {
        curl_setopt ($ch, CURLOPT_POST, 1); 
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $fields);
        //curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    }
    
    if (!empty($Authorization)) 
	{
		//$arr_header = array('Authorization: ' . $Authorization, 'Content-Type: application/json');
		$arr_header;
		$arr_header[0] = 'Authorization: ' . $Authorization;
		$arr_header[1] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $arr_header);
	}

	if ($method != 'post'){
		curl_setopt($ch, CURLOPT_HEADER, 1);
	}

    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); //1
    curl_setopt ($ch, CURLOPT_COOKIEJAR, $GLOBALS['nombrecookie']);
    curl_setopt ($ch, CURLOPT_COOKIEFILE, $GLOBALS['nombrecookie']);
    curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt ($ch, CURLOPT_TIMEOUT, $time);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $time);
    curl_setopt ($ch, CURLOPT_FAILONERROR, false);//tenia true  si es mayor a 400 pero no debe fallar
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, true);
	//faltaba esta linea jajajaja no se por que chch pero algo validan esos manespero estaba todo bueno esto es parte de la cabezera? si, y estaba todo bien
    curl_setopt ($ch,CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
	$response  = curl_exec($ch);
	

    curl_close ($ch);
    return $response; 
}

//genera archivo con nombre aleatorio de longitud caracteres
function generarcookie($longitud) {
	$key = '';
	$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
	$max = strlen($pattern)-1;
	for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
	$key=$key.'.txt';
	$archivo = fopen(dirname(__FILE__).'/ckie/'.$key,'a'); // se crea y se cierra
	fclose($archivo);
	return dirname(__FILE__).'/ckie/'.$key;
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