 <!DOCTYPE html>
<html lang="es">
<head>
 <!--Pagina Web creada EMILIO EB7EIB Copyright (c) 2024, Radioenlace VHF.-->
<meta charset="utf-8">
	<title>ENVIADO @</title>
		<!-- Iconos favicon pestaña-->
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" sizes="16x16 32x32 48x48">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap-4.4.1.js"></script>

<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
<center><img src="../gfx/banner.png" alt="Banner SevillaHamRadio" width="750" height="150" class="img-fluid"></center>
<!-- <center><img src="imagen/banner_6.png" class="img-fluid" alt="Banner Principal">-->
	
	<!-- MENU PRINCIPAL -->
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="color: #ffc880;"><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham" ><use href="../gfx/menuico.svg#flecha"></use> </svg>ENVIADO @</a>
    	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
        
      <li class="nav-item"><a class="nav-link" href="../index.html"><svg viewBox="0 0 576 576" Fill="#868686" class="menuicosvg"> <use href="../gfx/menuico.svg#homeico"></use></svg>INICIO</a> </li>
 <li class="nav-item"> <a class="nav-link" href="../radioenlace.html"> <svg viewBox="0 0 24 24" Fill="#868686" class="icoradio"> <use href="../gfx/menuico.svg#radioenlico"></use></svg>RADIOENLACE</a> </li>
		
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 576 576" fill="#868686" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg>TEAMSPEAK</a>
		  
       <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
			<a class="dropdown-item" href="../teamspeak.html"><b>INICIO TEAMSPEAK </b></a>	
			<a class="dropdown-item" href="../users_team.html"><b>LISTA USUARIOS</b></a> 
			<a STYLE= "color :#D80003" class="dropdown-item" href="../registro.html"><b>REGISTRO USUARIO</b></a>
		     <div class="dropdown-divider"></div> 
			<a class="dropdown-item" href="../man_team_android.html"><b>MANUAL ANDROID</b></a>
			<a class="dropdown-item" href="../man_team_win.html"><b>MANUAL WINDOWS</b></a>
		</div>			
		
		  </li>
	 
	  
	  <li class="nav-item"> <a class="nav-link" href="../eventos.html"><svg viewBox="0 0 452.986 452.986" Fill="#868686" class="icoevent"> <use href="../gfx/menuico.svg#eventico"></use></svg>EVENTOS</a> </li>
	 <!--  
<li class="nav-item"> <a class="nav-link" href="merca.html"><svg viewBox="0 0 512 512" Fill="#868686" class="icomerca"> <use href="gfx/menuico.svg#mercaico"></use></svg>MERCARADIO</a></li>	  

	  <li class="nav-item active"> <a class="nav-link" href="about.html"><svg viewBox="0 0 256 256" Fill="#00ff2d" class="icoabout"> <use href="gfx/menuico.svg#qsomosico"></use></svg>QUIÉNES SOMOS<span class="sr-only">(current)</span></a></li>
	  </ul>	
	 --> 
	  <li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 256 256" fill="#00ff2d" class="icoabout"> <use href="../gfx/menuico.svg#qsomosico"></use></svg>QUIÉNES SOMOS</a>
		  
       <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
			<a STYLE= "color :#D80003" class="dropdown-item" href="../auto.php"><b>ZONA PRIVADA</b></a>		
	   </div>			
		
		 </li> 
	  </ul>
	</div>	  
</nav>
	
<!-- fin menu -->
	<!-- inicio php -->
	
<?php

// Comprobación campos vacios $est1 = $_POST['ESTADO'];
$email_dest .= $_POST['email'];

if(!empty($_POST['INDICATIVO']) and !empty($_POST['email'])){
  
	// Construcción del mensaje del email usuario REGISTRO APROBADO OPCION 1
	
	if($_POST['ESTADO'] == 1) {
 $asunto1 = $_POST['INDICATIVO']. '. Registro aceptado TeamSpeak Radioenlace VHF.';
 $asunto1c .= $_POST['INDICATIVO']. ". Copia_Registro aceptado.";		
$email_a .= "Bienvenido " . $_POST['INDICATIVO']. " al servicio Voip TeamSpeak Radioenlace VHF.". "\n\n";
	if(!empty($_POST['comments']))	{
         $email_a .= utf8_decode($_POST['comments'])."\n\n";	
	}
$email_a .= utf8_decode("Datos configuración TeamSpeak:"). "\n\n";
$email_a .= "Servidor: radioenlace.hopto.org". "\n\n";
$email_a .= "Alias: " . $_POST['ALIAS']. "\n\n";
$email_a .= utf8_decode("Contraseña: (Sin datos, como viene en la configuración inicial)")."\n\n";	

$email_a .=utf8_decode("SE ANULARÁ EL REGISTRO SI EN UNA SEMANA NO ENTRA EN LA SALA RADIOENLACE VHF PARA REALIZAR LA ACTIVACIÓN DE NUEVO USUARIO.")."\n\n";
		
$email_a .= utf8_decode(".-RADIOAFICIONADO:")."\n";		
$email_a .= utf8_decode("AL ENTRAR POR PRIMERA VEZ EN LA SALA NO ESTÁ HABILITADO EL MICRÓFONO.")."\n";
$email_a .= utf8_decode("EL ADMINISTRADOR TE CONCEDERÁ EL PERMISO CORRESPONDIENTE.")."\n\n";

$email_a .= utf8_decode(".-RADIOESCUCHA:")."\n";		
$email_a .= utf8_decode("INHABILITADO EL USO DEL MICROFONO, POR CARECER DE LICENCIA DE RADIOAFICIONADO.")."\n\n";
		
$email_a .=utf8_decode("Manuales para instalación y descarga para Teamspeak. https://sevillahamradio.com/teamspeak.html")."\n\n";

$email_a .=utf8_decode("Si necesitas asistencia técnica para la configuración TeamSpeak o pertenecer al grupo de Whatsapp RadioEnlace VHF, puedes\n enviar el número de teléfono móvil vía email sevillahamradio@gmail.com, indicando el\n indicativo y teléfono. Te atenderemos gustosamente lo antes posible."). "\n\n";
	
$email_a .= utf8_decode("Radioenlace Analógico  145.3375Mhz tono 85.4HZ\n -- 145.200MHZ tono 85.4HZ. en la provincia de Sevilla.") . "\n\n";

$email_a .="Administrador. Un saludo 73."."\n\n";		
$email_a .= utf8_decode("No responda a este mensaje, es un envío automático."). "\n";
		
	echo "<p>EMAIL REGISTRO ACEPTADO.<br \>Email destino: $email_dest<br /> Asunto: $asunto1<br /> Mensaje:<br />"; 
	echo utf8_encode(nl2br($email_a));
		
		// Envio email registro aceptado
	     if(mail($_POST['email'], $asunto1, $email_a)){  
				mail('sevillahamradio@gmail.com', $asunto1c, $email_a);
		echo "<p><font color=#D80003> <center> ** EMAIL ENVIADO **<br />** SEVILLAHAMRADIO**</center></p>";
		 }
		
	}
		
	
		// Construcción del mensaje del email usuario REGISTRO DENEGADO OPCION 2
	if($_POST['ESTADO'] == 2) {
		$asunto2 = $_POST['INDICATIVO'].". Registro denegado TeamSpeak Radioenlace VHF.";
		$asunto2c = $_POST['INDICATIVO']. ". Copia_Registro denegado TeamSpeak Radioenlace VHF.";
		$email_deng .= $_POST['INDICATIVO'].". Comprobado los datos del registro y no cumple con los requisitos necesarios para ser usuario Voip TeamSpeak Radioenlace VHF.". "\n\n";
		if(!empty($_POST['comments']))	{
         $email_deng .= utf8_decode($_POST['comments'])."\n\n";	
		}
		$email_deng .="Administrador. Un saludo 73."."\n";
        $email_deng .= utf8_decode("No responda a este mensaje, es un envío automático."). "\n";
	   		
		echo "<p>EMAIL REGISTRO DENEGADO<br \>Email destino: $email_dest<br /> Asunto: $asunto2<br /> Mensaje:<br />"; 
	echo utf8_encode(nl2br($email_deng));
		// Envio email registro denegado
		if(mail($_POST['email'], $asunto2, $email_deng)){ 
			mail('sevillahamradio@gmail.com', $asunto2c, $email_deng);
		echo "<p><font color=#D80003> <center> ** EMAIL ENVIADO **<br />** SEVILLAHAMRADIO**</center></p>";
		 }
		}
	
	
      // Construcción del mensaje del email REG. ACT. PROX. FINALIZACION  OPCION 3
     if($_POST['ESTADO'] == 3) {
	       $asunto3 = $_POST['INDICATIVO'].'. **AVISO** Próximamente finaliza el periodo de activación TeamSpeak Radioenlace VHF. ';
		   $asunto3c .= $_POST['INDICATIVO']. ". Copia_Aviso próxima finalización activación TS.";	
		   if(!empty($_POST['comments']))	{
            $email_acprox .= utf8_decode($_POST['comments'])."\n\n";	
		    }
	       $email_acprox .= $_POST['INDICATIVO']. utf8_decode(". Si por alguna circunstancia no puede acceder a nuestro servicio Voip TeamSpeak Radioenlace VHF puede solicitar vía email sevillahamradio@gmail.com agregando en el asunto cualquiera de estas opciones:"). "\n\n";
		    
		 $email_acprox .= utf8_decode("-Ampliación tiempo de activación y el indicativo."). "\n";
		 $email_acprox .= utf8_decode("-Asistencia técnica, indicativo y teléfono."). "\n";
		 $email_acprox .= utf8_decode("-Anulación del registro y el indicativo."). "\n\n";
		 
		 $email_acprox .= utf8_decode("Para asistencia técnica TeamSpeak para Windows utilizaremos la aplicación de control remoto AnyDesk (https://anydesk.com/es/downloads/windows) y para configuración TeamSpeak Android el WhatsApp para intentar explicar la configuración."). "\n\n";
		 
		$email_acprox .="Administrador. Un saludo 73."."\n";
        $email_acprox .= utf8_decode("No responda a este mensaje, es un envío automático."). "\n";
		
		echo "<p>EMAIL PRÓXIMA FINALIZACIÓN PERIODO ACTIVACIÓN TS<br \>Email destino: $email_dest<br /> Asunto: $asunto3<br /> Mensaje:<br />"; 
		 
	    echo utf8_encode(nl2br($email_acprox));
		 
		// ENVIO EMAIL REG. PROXIMA. FINALIZACION ACT.
		if(mail($_POST['email'], $asunto3, $email_acprox)){  
			mail('sevillahamradio@gmail.com', $asunto3c, $email_acprox);
		echo "<p><font color=#D80003> <center> ** EMAIL ENVIADO **<br />** SEVILLAHAMRADIO**</center></p>";
		 }   
	
	 }
	//  Construcción del mensaje del email registro anulado fin periodo activación OPCION 4
	if($_POST['ESTADO'] == 4) {	
	      $asunto4 = $_POST['INDICATIVO'].'. Registro anulado Voip TeamSpeak Radioenlace VHF.';
		  $asunto4c = $_POST['INDICATIVO'].'. Copia_Registro anulado TeamSpeak.';
		  $email_acfin .= $_POST['INDICATIVO']. utf8_decode(". Registro anulado, por no llevar a cabo la activación del servicio Voip TeamSpeak Radioenlace VHF."). "\n\n";
		  $email_acfin .= utf8_decode("Si por alguna circustancia no puede acceder a nuestro servicio Voip puede repetir el registro cuando las condiciones sean más favorable para la activación."). "\n\n";
		 
		if(!empty($_POST['comments']))	{
         $email_acfin .= utf8_decode($_POST['comments'])."\n\n";	
		}
		$email_acfin .="Administrador. Un saludo 73."."\n";
        $email_acfin .= utf8_decode("No responda a este mensaje, es un envío automático."). "\n";
		
		echo "<p>EMAIL - REGISTRO ANULADO POR NO LLEVAR A CABO LA ACTIVACION.<br \>Email destino: $email_dest<br /> Asunto: $asunto4<br /> Mensaje:<br />"; 
		 
	    echo utf8_encode(nl2br($email_acfin));
		 
		// ENVIO EMAIL REG. ACT. PROX. FINALIZACION
		if(mail($_POST['email'], $asunto4, $email_acfin)){  
			mail('sevillahamradio@gmail.com', $asunto4c, $email_acfin);
		echo "<p><font color=#D80003><center> ** EMAIL ENVIADO **<br />** SEVILLAHAMRADIO**</center></p>";
		 }   
		
		
	 }
	
	//  Construcción del mensaje del email Baneado OPCION 5
	if($_POST['ESTADO'] == 5) {	
		$asunto5 = $_POST['INDICATIVO'].'. ***AVISO*** BANEADO TeamSpeak Radioenlace VHF.';
		 $asunto5c = $_POST['INDICATIVO'].'. Copia_Baneado TeamSpeak.';
		if(!empty($_POST['comments']))	{
         $email_ban .= utf8_decode($_POST['comments'])."\n\n";	
		}
		$email_ban .="Administrador. Radioenlace VHF."."\n";
        $email_ban .= utf8_decode("No responda a este mensaje, es un envío automático."). "\n";
		
		echo "<p>EMAIL BANEADO<br \>Email destino: $email_dest<br /> Asunto: $asunto5<br /> Mensaje:<br />"; 
		 
	    echo utf8_encode(nl2br($email_ban));
		 
		// ENVIO EMAIL REG. ACT. PROX. FINALIZACION
		if(mail($_POST['email'], $asunto5, $email_ban)){  
			mail('sevillahamradio@gmail.com', $asunto5c, $email_ban);
		echo "<p><font color=#D80003> <center> ** EMAIL ENVIADO **<br />** SEVILLAHAMRADIO**</center></p>";
		 }   
		
	}
	
}
	   		
 ?>
	
	<a href="javascript:history.back()"><center><img style="padding-bottom: 15px" src="../gfx/boton_at.png" width="150" alt="Botón"</center></a>	
		<br/>
		
</body>
<footer>
<p  style="color:#ff8800;display: inline;">EA7BEG - EA7KPT</p> 
<p>© 2024 Emilio EB7EIB</p>
  </footer>
</html>	
	