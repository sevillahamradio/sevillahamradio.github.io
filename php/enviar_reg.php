<!DOCTYPE html>
<html lang="es">
<head>
<!--Pagina Web creada EMILIO EB7EIB Copyright (c) 2024, Radioenlace VHF-->    
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
		
	  	<li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 576 576" fill="#00ff2d" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg>TEAMSPEAK</a>
			
       <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
			<a class="dropdown-item" href="../teamspeak.html"><b>INICIO TEAMSPEAK </b></a>	
			<a class="dropdown-item" href="../users_team.html"><b>LISTA USUARIOS</b></a> 
			<a class="dropdown-item active" href="../registro.html"><b>REGISTRO USUARIO</b></a>
			
		     <div class="dropdown-divider"></div> 
			<a class="dropdown-item" href="../man_team_android.html"><b>MANUAL ANDROID</b></a>
			<a class="dropdown-item" href="../man_team_win.html"><b>MANUAL WINDOWS</b></a>
            			
		    </div>			
       </li>
		
	
	  	  <li class="nav-item"> <a class="nav-link" href="../eventos.html"><svg viewBox="0 0 452.986 452.986" Fill="#868686" class="icoevent"> <use href="../gfx/menuico.svg#eventico"></use></svg>EVENTOS</a></li>
	 <!--  
	<li class="nav-item"> <a class="nav-link" href="merca.html"><svg viewBox="0 0 512 512" Fill="#868686" class="icomerca"> <use href="gfx/menuico.svg#mercaico"></use></svg>MERCARADIO</a></li>  
	--> 
	  <li class="nav-item"> <a class="nav-link" href="../qsomos.html"><svg viewBox="0 0 256 256" Fill="#868686" class="icoabout"> <use href="../gfx/menuico.svg#qsomosico"></use></svg>QUIÉNES SOMOS</a></li>  
	</ul>  
 </div>
  </nav>
	<br>
	
<!-- FIN MENU PRINCIPAL -->

<!-- ENVIO REGISTRO PHP -->
<?php

// Comprobación campos vacios

if(!empty($_POST['INDICATIVO']) and !empty($_POST['NOMBRE']) and !empty($_POST['PROVINCIA']) and !empty($_POST['PAIS']) and !empty($_POST['email'])){
  
	$username = $_POST['username'];
  $password = $_POST['password'];


// Construcción del mensaje del email

    $email_message = "Detalles del formulario de registro:\n\n";

    $email_message .= "Indicativo: " .  utf8_decode($_POST['INDICATIVO']) . "\n";

    $email_message .= "Nombre: " .  utf8_decode($_POST['NOMBRE']) . "\n";
	
    $email_message .= "Localidad: " .  utf8_decode($_POST['LOCALIDAD']) . "\n";
	
    $email_message .= "Provincia: " .  utf8_decode($_POST['PROVINCIA']) . "\n";

    $email_message .= "Pais: " .  utf8_decode($_POST['PAIS']) . "\n";

    $email_message .= "E-mail: " . $_POST['email'] . "\n";

	if(!empty($_POST['comments']))	{    	
		
    $email_message .= "Comentarios: " . utf8_decode($_POST['comments']) . "\n\n";
      }
    $asunto = "Formulario Registro. ". $_POST['INDICATIVO'];


// Construcción del mensaje del email usuario
    $email_dest .= $_POST['email'];
    $asunto1 = 'Registro enviado SevillaHamRadio.com';
	
    $email_message1 .=  utf8_decode("Su solicitud esta en proceso ". $_POST['INDICATIVO']) . "\n\n";
    $email_message1 .=  utf8_decode("Periodo comprobacíon 48 horas aproximadamente."). "\n";
    $email_message1 .=  utf8_decode("Recibira por email los datos de conexión y el alias."). "\n"; 
	$email_message1 .=  utf8_decode("No responda a este mensaje, es un envío automático.")	. "\n";
		echo "<p>DATOS EMAIL.<br \>Email destino: $email_dest.<br /> Asunto: $asunto1<br /><br />"; 
	   echo utf8_encode(nl2br($email_message)); 
	   
		// envio email 
		
 
	if(mail('ea7beg@gmail.com,ea7kpt@gmail.com,sevillahamradio@gmail.com', $asunto, $email_message)){
     	

			mail($_POST['email'], $asunto1, $email_message1);
		
		  echo "<p><font color=#00ff2d> <center> ** REGISTRO ENVIADO **<br /></center></p>";
		  echo "<p><font color=#F8FF00> <center> ** ADVERTENCIA ** <br /><font color=#FFFFFF> <center> SI NO APARECE NINGUN EMAIL<br />CONSULTE BANDEJA SPAM </center></p>"; 

	  }
}

else {  
    echo "<p><font color=#D80003> <center> ** EMAIL NO ENVIADO **<br />**REVISE EL FORMULARIO**</center></p>";
}
 ?>
<!-- Fin PHP -->
	<a href="../teamspeak.html"><center><img style="padding-bottom: 15px" src="../gfx/boton_exit.png" width="150" alt="Botón"</center></a>		
	</body>
<footer>
  <p><a href="qsomos.html" style="color: #ff8800">EA7BEG - EA7KPT </a><br>
© 2024 Emilio EB7EIB</p>
  </footer>
</html>