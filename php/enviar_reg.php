<!DOCTYPE html>
<html lang="es">
<head>
<!--Pagina Web creada EMPC Copyright (c) 2024, Radioenlace VHF-->    
	<meta charset="utf-8">
	<title>ENVIO REGISTRO @</title>
		<!-- Iconos favicon pestaña-->
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" sizes="16x16 32x32 48x48">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap-4.4.1.js"></script>
<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet">
		</head>
<body>  
<center><img src="../gfx/banner.png" alt="Banner SevillaHamRadio" width="750" height="150" class="img-fluid"></center>
	<!-- MENU PRINCIPAL -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="color:#ffc880;" ><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham"><use href="../gfx/menuico.svg#flecha"></use> </svg>REGISTRO ENVIADO @</a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
        
      <li class="nav-item"> <a class="nav-link" href="../index.html"> <svg viewBox="0 0 576 576" Fill="#868686" class="menuicosvg"> <use href="../gfx/menuico.svg#homeico"></use></svg>INICIO</a> </li>
		
      <li class="nav-item"> <a class="nav-link" href="../radioenlace.html"> <svg viewBox="0 0 24 24" Fill="#868686" class="icoradio"> <use href="../gfx/menuico.svg#radioenlico"></use></svg>RADIOENLACE</a> </li>
		
	  	<li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 24 24" fill="#00ff2d" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg>TEAMSPEAK</a>
			
       <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
			<a class="dropdown-item" href="../teamspeak.html"><b>INICIO TEAMSPEAK </b></a>	
		<!--	<a class="dropdown-item" href="../users_team.html"><b>LISTA USUARIOS</b></a> -->
			<a class="dropdown-item active" href="../registro.html"><b>REGISTRO USUARIO</b></a>
			
		     <div class="dropdown-divider"></div> 
			<a class="dropdown-item" href="../man_team_android.html"><b>MANUAL ANDROID</b></a>
			<a class="dropdown-item" href="../man_team_win.html"><b>MANUAL WINDOWS</b></a>
            			
		    </div>			
       </li>
		
	
	  <li class="nav-item"> <a class="nav-link" href="eventos.html"><svg viewBox="0 0 452.986 452.986" Fill="#868686" class="icoevent"> <use href="gfx/menuico.svg#eventico"></use></svg>EVENTOS</a></li>
	  
  <!--  
<li class="nav-item"> <a class="nav-link" href="merca.html"><svg viewBox="0 0 512 512" Fill="#868686" class="icomerca"> <use href="gfx/menuico.svg#mercaico"></use></svg>RADIOMERCA</a></li>
-->
	  <li class="nav-item"> <a class="nav-link" href="../qsomos.html"><svg viewBox="0 0 256 256" Fill="#868686" class="icoabout"> <use href="../gfx/menuico.svg#qsomosico"></use></svg>ABOUT</a></li>  
	</ul>  
 </div>
  </nav>
	<br>
	
<!-- FIN MENU PRINCIPAL -->

<!-- ENVIO REGISTRO PHP -->
<?php
	setlocale(LC_ALL, 'es_ES');
	// mysql
// recaptha v3
	/* recaptcha
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = '6LeYITAqAAAAABN2gBFoXn4G5AntFmCmRB-v_Vvc'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 

if($recaptcha->score >= 0.1){
// recaptcha ok
*/
	
function submitRequest($url, $params)
{
    $strParams = http_build_query($params, null, '&');

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $strParams);
    $http_response = curl_exec($curl);

    return json_decode($http_response);
}

/**
 * Get POST parameter using name
 */
function getField($key)
{
    return isset($_POST[$key]) ? $_POST[$key] : null;
}

// define parameters
$apiUrl = 'https://www.google.com/recaptcha/api/siteverify';
$params = [
    'secret' => '6LfGizAqAAAAAJ3EdDnmY9Z0Uwv-xzTZJQR4Z8hK',
    'response' => getField('g-recaptcha-response')
];

// call to API
$response = submitRequest($apiUrl, $params);
if ($response->success) {	
	
	// recaptcha ok
		// llamada conexion
	require_once('conexion.php');
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$sql ="SELECT EMAIL FROM usuarios_shr WHERE EMAIL='$email' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
echo "<p><font color=red><center> <b>*** ERROR ***</font><br /> @EMAIL <br /><font color=white> $email</font><br /><font color=red> YA ESTÁ REGISTRADO.</font><br /><font color=#fffc15>PARA CUALQUIER MODIFICACIÓN ENVIE POR EMAIL LOS CAMBIOS</font><br /><a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'>SEVILLAHAMRADIO@GMAIL.COM <br /></a></center></p>";
echo "<a href='https://sevillahamradio.com/registro.html'><center><img style='padding-bottom: 15px' src='../gfx/boton_at.png' width='150' alt='Botón'</center></a>	
		<br> ";
mysqli_close($conn);
exit();    
}  
$result->free();
// comprobar licencia null
if ($_REQUEST['licencia'] == "radioaf") {
$licx = "EA";
$indix = mb_strtoupper($_POST['indicativoea'],'UTF-8');

} else{
if ($_REQUEST['licencia'] == "cb27"){
$licx = "CB";
$indix =mb_strtoupper($_POST['indicativocb'],'UTF-8'); 
 } else{
if ($_REQUEST['licencia'] == "radioesc"){
$licx = "RADIOESCUCHA";
$indix = mb_strtoupper($_POST['indicativoresc'],'UTF-8'); 
} else{
echo "<p><font color=red><center> <b>*** ERROR ***</font><br /> <font color=white><u>CAMPO INDICATIVO VACIO</u></font></center></p>";
mysqli_close($conn); 
exit();
}
}
}
if(!empty($indix) and !empty($_POST['nombre']) and !empty($_POST['provincia']) and !empty($_POST['pais']) and !empty($_POST['email'])){

$indiea = mb_strtoupper($_POST['indicativoea'],'UTF-8'); 
$indicb = mb_strtoupper($_POST['indicativocb'],'UTF-8'); 
$indiresc =  mb_strtoupper($_POST['indicativoresc'],'UTF-8');
$reg = 'PTE-APROBAR';
$est = 'PTE-ACTIVAR';
$nombre = mb_strtoupper($_POST['nombre'],'UTF-8');
$localidad = mb_strtoupper($_POST['localidad'],'UTF-8');
$provincia = mb_strtoupper($_POST['provincia'],'UTF-8'); 
$pais = mb_strtoupper($_POST['pais'],'UTF-8');
$email = mb_strtolower($_POST['email']);
$telefono = $_POST['telefono'];
$comentarios = mb_strtoupper($_POST['comentarios'],'UTF-8');
// prueba desconectar DB INSERT
$insertar = "INSERT INTO usuarios_shr (IND_EA, IND_CB, IND_RESC, TIPO_LIC, REGISTRO, ESTADO, NOMBRE, LOCALIDAD, PROVINCIA, PAIS, EMAIL, TELEFONO, COMENTARIOS) VALUES( 
'$indiea', 
'$indicb', 
'$indiresc',
'$licx', 
'$reg',
'$est', 
'$nombre',
'$localidad',
'$provincia', 
'$pais',
'$email',
'$telefono',
'$comentarios')"; 

mysqli_query($conn, $insertar);
	// fin desconectar DB INSERT
// Crear cabecera email

$cabeceras = 'From: registro@sevillahamradio.com' . "\r\n" .
	         'Content-type: text/html; charset=UTF-8' . "\r\n" .
	         'X-Mailer: PHP/' . phpversion();    

	// BUSQUEDA EMAIL RECUPERAR AUTONUMERO
	$sqlbusq ="SELECT AUTO, EMAIL FROM usuarios_shr WHERE EMAIL='$email' LIMIT 1";
	$resaut = $conn->query($sqlbusq);
	  while($mostrar=mysqli_fetch_array($resaut)){
          $numref = $mostrar['AUTO'];			
    }
    $resaut->free();
// DATOS EMAIL -----------  CONTENIDO	
	
$email_message ="<html><body>";

 $email_message .= "
 <table align='center' width='100%' cellpadding='0' cellspacing='0' border='0' bgcolor='#ffe0b2'>"; 
  	$email_message .="<tbody>
	<tr align='center' >
	<td><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";

$email_message .= "
<tr align='center' > 
<td style='padding: 8px 0px 20px 0;'><span style='background-color:#000000'><font color =#aaffca>** SEVILLAHAMRADIO.COM **</font></span></td></tr>";

$email_message .="
<tr align='center'><td style='padding-bottom: 20px;'><span style='background-color:#000000'>
<font color = yellow><u><< DATOS DEL USUARIO >></u></font><span></td></tr>";
 
// DATOS NUMERO REGISTRO
$email_message .= "<tr align='center'>
<td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Numero registro:&nbsp;</font></span></td></tr>";	
	
	$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$numref</span></td></tr>";
  
// DATOS OPERADOR
$email_message .= "<tr align='center'>
<td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Tipo operador:&nbsp;</font></span></td></tr>";

	$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$licx</span></td></tr>";
  
 // DATOS INDICATIVO Y ASUNTO
 
 if ($_REQUEST['licencia'] == "radioaf") {
  $email_message .="<tr align='center'><td style='padding-bottom: 8px'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Indicativo EA o Equivalente:&nbsp;</font></span></td></tr>";
  
  $email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indiea</span></td></tr>";

 if(!empty($_POST['indicativocb'])){  
  $email_message .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Indicativo CB:&nbsp;</font></span></td></tr>"; 
 $email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indicb</span></td></tr>";
 
 }      
  // CREAR ASUNTO EA
$asunto = 'Registro Radioenlace VHF-CB. '. $indiea;
 }
 
 if ($_REQUEST['licencia'] == "cb27") {
  $email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Indicativo CB:&nbsp;</font></span></td></tr>";
$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indicb</span></td></tr>";  
  
  // CREAR ASUNTO CB
$asunto = 'Registro Radioenlace CB. '. $indicb;
}  

if ($_REQUEST['licencia'] == "radioesc") {
  $email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Indicativo Radioescucha:&nbsp;</font></span></td></tr>";
  
$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indiresc</span></td></tr>"; 
   
// CREAR ASUNTO RADIOESCUCHA
$asunto = 'Registro Radioescucha Radioenlace VHF-CB. '. $indiresc;
}  
// DATOS NOMBRE
 $email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Nombre:&nbsp;</font>	</span></td></tr>";
$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$nombre</span></td></tr>";
   
// DATOS LOCALIDAD  
if(!empty($_POST['localidad'])){
 $email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Localidad:&nbsp;</font></span></td></tr>";
$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$localidad</span></td></tr>";
}
// DATOS PROVINCIA	
 $email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Provincia:&nbsp;</font>	</span></td></tr>";
 
$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$provincia</span></td></tr>";
 
// DATOS PAIS
$email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Pais:&nbsp;</font></span></td></tr>";	

$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$pais</span></td></tr>";
  
// DATOS EMAIL
$email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Email:&nbsp;</font></span></td></tr>";

$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$email</span></td></tr>";

// DATOS TELEFONO
if(!empty($_POST['telefono'])){  
  $email_message .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Teléfono:&nbsp;</font></span></td></tr>";

$email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$telefono</span></td></tr>";  
 } 
	
// DATOS COMENTARIOS 
if(!empty($_POST['comentarios'])){  
  $email_message .="<tr align='center'><td style='padding-bottom: 8px'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Comentarios:&nbsp;</font>	</span></td></tr>";
  
 $email_message .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$comentarios</span></td></tr>";   
 } 	
 $email_message .= "</tr>";
 $email_message .= "</table>";
 $email_message .= "</body></html>";	
// FIN EMAIL --------- CONTENIDO	

// Construcción del mensaje del email usuario
	// asunto usuario
$asunto1 = 'Registro enviado SevillaHamRadio.com';
     // contenido email usuario
	
 $email_mesuser ="<html><body>";
 $email_mesuser .= "
 <table align='center' width='100%' cellpadding='0' cellspacing='0' border='0' bgcolor='#ffe0b2'>"; 
 $email_mesuser .="<tbody>
	<tr align='center' >
	<td><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";
$email_mesuser .= "
<tr align='center' > 
<td style='padding: 8px 0px 20px 0;'><span style='background-color:#000000'><font color =#aaffca>** SEVILLAHAMRADIO.COM **</font></span></td></tr>";
$email_mesuser .="
<tr align='center'><td style='padding-bottom: 20px;'><span style='background-color:#000000'>
<font color = yellow><u><< REGISTRO ENVIADO >></u></font><span></td></tr>";
	$email_mesuser .= "<tr align='center'>	    
<td style='padding-bottom: 6px;'><span>Su solicitud esta en proceso.&nbsp;</span></td>
	</tr>";	
		$email_mesuser .= "<tr align='center'>	    
<td style='padding-bottom: 10px;'><span style='background-color:#575757'><font color = #b5ffaa><<&nbsp;$indix&nbsp;>></font></span></td>
	</tr>";	
	
$email_mesuser .= "<tr align='center'>
<td style='padding-bottom: 10px;'><span>Periodo comprobacíon aproximadamente 48 horas.<br>Recibira por email los datos de conexión y el alias.</span></td></tr>";	

$email_mesuser .= "<tr align='center'>	
<td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color=#d5ffdf>PARA CUALQUIER MODIFICACIÓN ENVIE POR EMAIL LOS CAMBIOS</font></span></td></tr>";	

$email_mesuser .= "<tr align='center'>	
<td style='padding-bottom: 10px;'><a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'>SEVILLAHAMRADIO@GMAIL.COM </a></td></tr>";		
	
$email_mesuser .= "</table>";
$email_mesuser .= "</body></html>";	
// FIN EMAIL --------- CONTENIDO	
	// envio email
	// PRUEBA ea7beg@gmail.com, ea7kpt@gmail.com, sevillahamradio@gmail.com
if(mail('ea7beg@gmail.com, ea7kpt@gmail.com, sevillahamradio@gmail.com', $asunto, $email_message, $cabeceras)){
	
 mail($_POST['email'], $asunto1, $email_mesuser, $cabeceras);
	
	// MOSTRAR DATOS EN PANTALLA
	
	$email_printscr ="<html><body>";
    $email_printscr .= "
 <table align='center' width='100%' cellpadding='0' cellspacing='0' border='0' bgcolor='#1F2327'>"; 
	$email_printscr .="<tbody>
    <tr align='center' > 
   <td style='padding: 8px 0px 20px 0;'><span style='font-size: 26px; background-color:#000000;'><font color =#caffaa>&nbsp;** REGISTRO ENVIADO **&nbsp;</font></span></td></tr>";
	$email_printscr .= "<tr align='center'>
<td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Tipo operador:&nbsp;</font></span></td></tr>";

$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$licx</span></td></tr>";
	
	if ($_REQUEST['licencia'] == "radioaf") {
  $email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp; Indicativo EA o Equivalente:&nbsp;</font></span></td></tr>";
  
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indiea</span></td></tr>";  
 
 if(!empty($_POST['indicativocb'])){  
  $email_printscr .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Indicativo CB:&nbsp;</font></span></td></tr>";
  
  $email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indicb</span></td></tr>";  
 }      
   }
 
 if ($_REQUEST['licencia'] == "cb27") {
  $email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Indicativo CB:&nbsp;</font></span></td></tr>";
  
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indicb</span></td></tr>";

}  

if ($_REQUEST['licencia'] == "radioesc") {
  $email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Indicativo Radioescucha:&nbsp;</font>	</span></td></tr>";
  
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$indiresc</span></td></tr>";  
	}
	// DATOS NOMBRE
	$email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Nombre:&nbsp;</font>	</span></td></tr>";
 
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$nombre</span></td></tr>"; 
	
if(!empty($_POST['localidad'])){
 $email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Localidad:&nbsp;</font></span></td></tr>";
 
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$localidad</span></td></tr>"; 
}

// DATOS PROVINCIA	
 $email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Provincia:&nbsp;</font>	</span></td></tr>";
 
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$provincia</span></td></tr>"; 
  
// DATOS PAIS
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Pais:&nbsp;</font></span></td></tr>";	

$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$pais</span></td></tr>"; 

// DATOS EMAIL
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Email:&nbsp;</font></span></td></tr>";

$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$email</span></td></tr>";
  
// DATOS TELEFONO
if(!empty($_POST['telefono'])){  
  $email_printscr .="<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#000000'><font color = #8fff00>&nbsp;Teléfono:&nbsp;</font></span></td></tr>";
  
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$telefono</span></td></tr>";
    
 } 
	
// DATOS COMENTARIOS 
if(!empty($_POST['comentarios'])){  
  $email_printscr .="<tr align='center'><td><span style='background-color:#000000'><font color = #8fff00>&nbsp;Comentarios:&nbsp;</font></span></td></tr>";
  
$email_printscr .="<tr align='center'><td style='padding-bottom: 8px'>
  <span>$comentarios</span></td></tr>";  
 } 
$email_printscr .="<tr align='center'><td style='padding: 2px 0px 8px 0px'><span><font color=#FF2D2D><u>** ADVERTENCIA **</u></font></span></td></tr>";

$email_printscr .="<tr align='center'><td style='padding-bottom: 10px'><span>
<font color=#FFFFFF>SI NO APARECE NINGUN EMAIL<br>CONSULTE BANDEJA<br>CORREO NO DESEADO.</font></span></td></tr>";

$email_printscr .= "<tr align='center'>	
<td style='padding-bottom: 8px'><span><font color=#64CC83>PARA CUALQUIER MODIFICACIÓN <br>ENVIE POR EMAIL LOS CAMBIOS</font><span></td></tr>";

$email_printscr .= "<tr align='center'><td style='padding-bottom: 10px'>	
<a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'>SEVILLAHAMRADIO@GMAIL.COM </a></td></tr>";			
	
$email_printscr .= "</table>";
$email_printscr .= "</body></html>";	
	print_r ($email_printscr);
		
}else {  
    echo "<p><font color=#D80003> <center> ** EMAIL NO ENVIADO **<br />**REVISE EL FORMULARIO**</center></p>";
	echo "<a href='https://sevillahamradio.com/registro.html'><center><img style='padding-bottom: 15px' src='../gfx/boton_at.png' width='150' alt='Botón'</center></a>	<br> ";
}	
}
// ERROR FALTA DATOS REGISTRO
else {  
    echo "<p><center><font color=red> <b>*** ERROR ***</font><br /> <font color=white> EMAIL NO ENVIADO<br />**REVISE EL FORMULARIO**</center><br /></p>";
	echo "<p><center> PARA CUALQUIER CONSULTA EMAIL<br /><a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'>SEVILLAHAMRADIO@GMAIL.COM <br /></a></center></p>";
	echo "<a href='https://sevillahamradio.com/registro.html'><center><img style='padding-bottom: 15px' src='../gfx/boton_at.png' width='150' alt='Botón'</center></a>	<br> ";
mysqli_close($conn); 
exit();   
}

// echo "***prueba salida***";

mysqli_close($conn);
	
// recaptcha mensaje robot
}else{
echo "<p><font color=#D80003> <center> ** EMAIL NO ENVIADO **<br />**DETECTADO SPAM**<br /> </center></p>"; 
	echo "<p><font color=#fff12b> <center> VUELVA AL FORMULARIO DE REGISTRO <br />RELLENE LOS CAMPOS DE NUEVO.<br /> 
   PARA CUALQUIER CONSULTA EMAIL<br /><a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'>SEVILLAHAMRADIO@GMAIL.COM <br /></a></center></p>";
	
echo "<a href='https://sevillahamradio.com/registro.html'><center><img style='padding-bottom: 15px' src='../gfx/boton_at.png' width='150' alt='Botón'</center></a>	<br>";
mysqli_close($conn); 
exit();   
}		
 ?>	
<!-- Fin PHP -->
	</body>
<footer>
  <p><a href="qsomos.html" style="color: #ff8800">EA7BEG - EA7KPT </a><br>
© 2024 EB7EIB</p>
  </footer>
</html>
