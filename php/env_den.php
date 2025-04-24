<?php
session_start();
include("check.php"); 
?>
<html lang="es">
<head>
 <!--Pagina Web creada EB7EIB Copyright (c) 2024, Radioenlace VHF.-->
<meta charset="utf-8">
	<title>EMAIL DENEGADO @</title>
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
    <a class="navbar-brand" href="#" style="color: #ffc880;"><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham" ><use href="../gfx/menuico.svg#flecha"></use> </svg>DENEGADO @MAIL</a>
    	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
        
      <li class="nav-item"><a class="nav-link" href="../index.html"><svg viewBox="0 0 576 576" Fill="#868686" class="menuicosvg"> <use href="../gfx/menuico.svg#homeico"></use></svg>INICIO</a> </li>
 <li class="nav-item"> <a class="nav-link" href="../radioenlace.html"> <svg viewBox="0 0 24 24" Fill="#868686" class="icoradio"> <use href="../gfx/menuico.svg#radioenlico"></use></svg>RADIOENLACE</a> </li>
		
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 24 24" fill="#868686" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg>TEAMSPEAK</a>
		  
       <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
			<a class="dropdown-item" href="../teamspeak.html"><b>INICIO TEAMSPEAK </b></a>	
		<!--	<a class="dropdown-item" href="../users_team.html"><b>LISTA USUARIOS</b></a> -->
			<a STYLE= "color :#D80003" class="dropdown-item" href="../registro.html"><b>REGISTRO USUARIO</b></a>
		     <div class="dropdown-divider"></div> 
			<a class="dropdown-item" href="../man_team_android.html"><b>MANUAL ANDROID</b></a>
			<a class="dropdown-item" href="../man_team_win.html"><b>MANUAL WINDOWS</b></a>
		</div>			
		
		  </li>
	 
	  <li class="nav-item"> <a class="nav-link" href="eventos.html"><svg viewBox="0 0 452.986 452.986" Fill="#868686" class="icoevent"> <use href="gfx/menuico.svg#eventico"></use></svg>EVENTOS</a></li>
  <!--  
<li class="nav-item"> <a class="nav-link" href="merca.html"><svg viewBox="0 0 512 512" Fill="#868686" class="icomerca"> <use href="gfx/menuico.svg#mercaico"></use></svg>RADIOMERCA</a></li>
-->
	  <li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 256 256" fill="#00ff2d" class="icoabout"> <use href="../gfx/menuico.svg#qsomosico"></use></svg>ABOUT</a>
		  
      <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
			<a STYLE= "color: black;" class="dropdown-item active"><svg viewBox="0 0 24 24" fill="gold" class="icopriva"> <use href="../gfx/menuico.svg#privico"></use></svg><b>ZONA PRIVADA</b></a>		
	   </div>			
		
		 </li> 
	  </ul>
	</div>	  
</nav>	
	
<!-- fin menu -->
<?php
setlocale(LC_ALL, 'es_ES');

if(empty($_POST['numreg'])){echo "
<script> alert('ERROR EN EL REGISTRAR\\nNUMERO VACIO');
document.location.href='zpmen.php'</script>";
}
// llamada conexion
	require_once('conexion.php');
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	

$id_bot_den = $_POST['bt_den'];
$id_bot_db_den = $_POST['bt_den_db'];
$id_autonum = $_POST['numreg'];
$id_tlic = $_POST['tlic'];
$id_ea = $_POST['i_ea'];
$id_cb = $_POST['i_cb'];
$id_res = $_POST['i_res'];
$id_email = $_POST['i_email'];
$adm_com = $_POST['adm_com'];

if ($id_bot_den == "REG @ DENEGADO" || $id_bot_db_den == "ACTUALIZAR DB"){

// ACTUALIZAR DB REG DENEGADO
$activ_sql_al_deneg="UPDATE `usuarios_shr` SET `REGISTRO` = 'DENEGADO' WHERE `usuarios_shr`.`AUTO` ='$id_autonum'"; 	
		 $stmt = $conn->prepare($activ_sql_al_deneg); 
		  $stmt->execute();	
		// INICIO DATOS EN PANTALLA
if($id_bot_db_den == "ACTUALIZAR DB"){ 
	 $scr_dbd ="<html><body><div align='center'>";
	$scr_dbd .=" <h3><u>ACTUALIZACION DBASE</u></h3>
	 <div>
	<span style='font-size: 18px; background-color:#8A4D00;'><font color =#FFFFFF>&nbsp;REGISTRO N°$id_autonum DENEGADO &nbsp;</font></span>
	</div>";
// MOSTRAR INDICATIVO
if($id_tlic == "EA"){ 
	$scr_dbd .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp$id_ea&nbsp;&nbsp;</font></span>
	</div>";}
	if($id_tlic == "CB"){ 
	$scr_dbd .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp$id_cb&nbsp;&nbsp;</font></span>
	</div>";}
	if($id_tlic == "RADIOESCUCHA"){ 
	$scr_dbd .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp;$id_res&nbsp;&nbsp;</font></span>
	</div>";}

		$scr_dbd .="
	 	<div style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div> 
	</div></body></html>";
	print_r ($scr_dbd);
	 }  
if ($id_bot_den == "REG @ DENEGADO"){
// <h6><<< @EMAIL ENVIADO >>></h6>
echo "<br> <div align='center'> <h4 style='background-color:#370303; width: 275px;'><font color =#FFFFFF><u>REGISTRO DENEGADO</u></font></h4>  
 </div>";
 
 
// INICIO CUERPO EMAIL
$mail_den ="<html><body>

<div align='center' style=' background-color:#021308'>
		
<table align='center' width='100%' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
	<tr align='center'>
	<td><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";	
	$mail_den .="
<tr align='center'> 
<td style='padding: 8px 0px 20px 0;'>
<a href='https://sevillahamradio.com/' title='sevillahamradio'><font style='background-color:#000000' color ='#aaffca'>** SEVILLAHAMRADIO.COM **</font></td></tr>";

//	contenido denegado usuario

if($id_tlic == 'EA'){

$men_lic_d = $id_ea;
	 $asuntousr_d ='Usuario '.$id_ea.'. Registro denegado TeamSpeak. Radioenlace VHF-CB27Mhz.';
	 
	$asuntocop_d ='Copia_Usuario '.$id_ea.'. Registro denegado TeamSpeak. Radioenlace VHF-CB27Mhz.'; 
}

if($id_tlic == 'CB'){
$men_lic_d = $id_cb;

	 $asuntousr_d ='Usuario '.$id_cb.'. Registro denegado TeamSpeak. Radioenlace CB27Mhz.';
	 
	$asuntocop_d ='Copia_Usuario '.$id_cb.'. Registro denegado TeamSpeak. Radioenlace CB27Mhz.';  
}

if($id_tlic == 'RADIOESCUCHA'){
$men_lic_d = $id_res;
	 $asuntousr_d ='Usuario '.$id_res.'. Registro denegado TeamSpeak. Radioenlace Radioescucha.';
	 
$asuntocop_d ='Copia_Usuario '.$id_res.'. Registro denegado TeamSpeak. Radioenlace Radioescucha.'; 
}
		$mail_den .="
		<tr align='center'>
    <td style='padding-bottom: 10px;'>
      
<span><font color = #ff152a><u>REGISTRO DENEGADO</u></font></span>
</td></tr>
	<tr align='center'>
    <td style='padding-bottom: 20px;'>
<span>
<font color = #6af5ff>USUARIO <font color = #ffffff>$men_lic_d</font><br>SERVICIO VOIP TEAMSPEAK<br>RADIOENLACE VHF-CB27Mhz</font></span></td>
</tr> </table>";

	$mail_den .="
	<table align='center' width='300px' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
<tr align='left'>
    <td style='padding-bottom: 10px;' >	
	<span>
<font color = #ffd240>Comprobado los datos del registro y no cumple con los requisitos necesarios para ser usuario Voip TeamSpeak Radioenlace.</span>
</td></tr>";

if(!empty($adm_com)){
	
$mail_den .="
	<tr align='left'>
    <td style='padding-bottom: 10px;'>
	<span><font color = #ffdfaa>Comentarios:</font>
	<font color =#95ffb7>$adm_com</font></span>
	
 </td></tr>";
	}
$mail_den .="
		<tr align='center'>
    <td style='padding-bottom: 10px;'>
		<div style='padding-bottom: 5px;'>
<span><font color=#FFFFFF>Envie por Email las consultas o<br>modificaciones del registro</font><span>	
    </div>
<a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'><font color='#00E3FF'>SEVILLAHAMRADIO@GMAIL.COM</font></a>
		</td></tr>";
		
$mail_den .="
</table></div></body></html>
";	
	$mail_pbot .="
			
	 	 <div align='center' style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div>
		"; 

print_r ($mail_den.$mail_pbot);

// ENVIO EMAIL	
	 
	$cabeceras = 'From: registro@sevillahamradio.com' . "\r\n" .
	         'Content-type: text/html; charset=UTF-8' . "\r\n" .
	         'X-Mailer: PHP/' . phpversion();    
	   
	// sevillahamradio@gmail.com
	
	if(mail('sevillahamradio@gmail.com', $asuntocop_d, $mail_den, $cabeceras)){
	mail($id_email, $asuntousr_d,$mail_den, $cabeceras);
	echo "<div align='center'>
	<h6><<< @EMAIL ENVIADO >>></h6>
	</div>";
	}
	else {
	echo "<div align='center'>
	<h6><<< EMAIL NO ENVIADO >>><br>  >>>> ERROR <<<<</h6>
	</div>";
	} 
	
}
	
}
?>


</body>
<footer>
<p  style="color:#ff8800;display: inline;">EA7BEG - EA7KPT</p> 
<p>© 2024 EB7EIB</p>
  </footer>
</html>		
