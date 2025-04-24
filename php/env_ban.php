<?php
session_start();
include("check.php"); 
?>
<html lang="es">
<head>
 <!--Pagina Web creada EB7EIB Copyright (c) 2024, Radioenlace VHF.-->
<meta charset="utf-8">
	<title>USUARIO BANEADO @</title>
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
    <a class="navbar-brand" href="#" style="color: #ffc880;"><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham" ><use href="../gfx/menuico.svg#flecha"></use> </svg>BANEADO @MAIL</a>
    	
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

if(empty($_POST['numreg_b'])){echo 
"<script> alert('ERROR EN EL REGISTRAR\\nNUMERO VACIO');
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

$id_bot_ban = $_POST['bt_baneo'];
$id_bot_db_ban = $_POST['bt_ban_db'];
$id_bot_desb = $_POST['bt_desb'];
$id_bot_db_desb = $_POST['bt_desb_db'];

$id_autonum_b = $_POST['numreg_b'];
$id_tlic_b = $_POST['tlic_b'];
$id_ea_b = $_POST['i_ea_b'];
$id_cb_b = $_POST['i_cb_b'];
$id_res_b = $_POST['i_res_b'];
$id_email_b = $_POST['i_email_b'];
$adm_com_b = $_POST['adm_com_ban'];
// BANEAR
if ($id_bot_ban == "BANEAR @MAIL" || $id_bot_db_ban == "ACTUALIZAR DB"){

// ACTUALIZAR DB ESTADO BANEADO
$activ_sql_al_ban="UPDATE `usuarios_shr` SET `ESTADO` = 'BANEADO' WHERE `usuarios_shr`.`AUTO` ='$id_autonum_b'"; 	
		 $stmt = $conn->prepare($activ_sql_al_ban); 
		  $stmt->execute();	
		  
		// INICIO DATOS EN PANTALLA
		if($id_bot_db_ban == "ACTUALIZAR DB"){ 
	 $scr_dbb ="<html><body><div align='center'>";
	$scr_dbb .=" <h3><u>ACTUALIZACION DBASE</u></h3>
	 <div>
	<span style='font-size: 18px; background-color:#8A4D00;'><font color =#FFFFFF>&nbsp;REGISTRO N°$id_autonum BANEADO &nbsp;</font></span>
	</div>";
			
// MOSTRAR INDICATIVO
		if($id_tlic_b == "EA"){ 
	$scr_dbb .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp$id_ea_b&nbsp;&nbsp;</font></span>
	</div>";}
	if($id_tlic_b == "CB"){ 
	$scr_dbb .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp$id_cb_b&nbsp;&nbsp;</font></span>
	</div>";}
	if($id_tlic_b == "RADIOESCUCHA"){ 
	$scr_dbb .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp;$id_res_b&nbsp;&nbsp;</font></span>
	</div>";}

	$scr_dbb .="
	 	<div style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div> 
	</div></body></html>";
	print_r ($scr_dbb);						
		}
	if ($id_bot_ban == "BANEAR @MAIL"){
	echo "<br> <div align='center'> <h4 style='background-color:#370303; width: 275px;'><font color =#FFFFFF><u>USUARIO BANEADO</u></font></h4>  
 </div>";
		// INICIO CUERPO EMAIL
$mail_ban ="<html><body>

<div align='center' style=' background-color:#020216'>
		
<table align='center' width='100%' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
	<tr align='center'>
	<td><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";	
	$mail_ban .="
<tr align='center'> 
<td style='padding: 8px 0px 20px 0;'>
<a href='https://sevillahamradio.com/' title='sevillahamradio'><font style='background-color:#000000' color ='#aaffca'>** SEVILLAHAMRADIO.COM **</font></td></tr>";
	//	contenido  usuario baneado
		
	if($id_tlic_b == 'EA'){

$men_lic_b = $id_ea_b;
	 $asuntousr_b ='Usuario '.$id_ea_b.'. Usuario baneado TeamSpeak. Radioenlace VHF-CB27Mhz.';
	 
	$asuntocop_b ='Copia_Usuario '.$id_ea_b.'. Usuario baneado TeamSpeak. Radioenlace VHF-CB27Mhz.'; 
}	
if($id_tlic_b == 'CB'){
$men_lic_b = $id_cb_b;

	 $asuntousr_b ='Usuario '.$id_cb_b.'. Usuario baneado TeamSpeak. Radioenlace CB27Mhz.';
	 
	$asuntocop_b ='Copia_Usuario '.$id_cb_b.'. Usuario baneado TeamSpeak. Radioenlace CB27Mhz.';  
}

if($id_tlic_b == 'RADIOESCUCHA'){
$men_lic_b = $id_res_b;
	 $asuntousr_b ='Usuario '.$id_res_b.'. Usuario baneado TeamSpeak. Radioenlace Radioescucha.';
	 
$asuntocop_b ='Copia_Usuario '.$id_res_b.'. Usuario baneado TeamSpeak. Radioenlace Radioescucha.'; 
}
$mail_ban .="
		<tr align='center'>
    <td style='padding-bottom: 10px;'>
      
<span><font color = #ff152a><u>USUARIO BANEADO</u></font></span>
</td></tr>
	<tr align='center'>
    <td style='padding-bottom: 20px;'>
<span>
<font color = #6af5ff>USUARIO <font color = #ffffff>$men_lic_b</font><br>SERVICIO VOIP TEAMSPEAK<br>RADIOENLACE VHF-CB27Mhz</font></span></td>
</tr> </table>";
	$mail_ban .="
	<table align='center' width='300px' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
<tr align='left'>
    <td style='padding-bottom: 10px;' >	
	<span>
<font color = #ffd240>Usuario baneado por no cumplir con las normas del Radioenlace o por mal comportamiento.</span>
</td></tr>";

if(!empty($adm_com_b)){
	
$mail_ban .="
	<tr align='left'>
    <td style='padding-bottom: 10px;'>
	<span><font color = #ffdfaa>Comentarios:</font>
	<font color =#95ffb7>$adm_com_b</font></span>
	
 </td></tr>";
	}	
	$mail_ban .="
		<tr align='center'>
    <td style='padding-bottom: 10px;'>
		<div style='padding-bottom: 5px;'>
<span><font color=#FFFFFF>Envie por Email las consultas o<br>alegaciones para eliminar el baneo</font><span>	
    </div>
<a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'><font color='#00E3FF'>SEVILLAHAMRADIO@GMAIL.COM</font></a>
		</td></tr>";
		
$mail_ban .="
</table></div></body></html>
";	
	$mail_bbot .="
			
	 	 <div align='center' style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div>
		"; 

print_r ($mail_ban.$mail_bbot);

// ENVIO EMAIL	
	$cabeceras = 'From: registro@sevillahamradio.com' . "\r\n" .
	         'Content-type: text/html; charset=UTF-8' . "\r\n" .
	         'X-Mailer: PHP/' . phpversion();    
	   
	// sevillahamradio@gmail.com
	
	if(mail('sevillahamradio@gmail.com', $asuntocop_b, $mail_ban, $cabeceras)){
	mail($id_email_b, $asuntousr_b,$mail_ban, $cabeceras);
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
		
// DESBANEAR	

if ($id_bot_desb == "DESBANEAR @" || $id_bot_db_desb == "ACTUALIZAR DB"){

// ACTUALIZAR DB ESTADO DESBANEADO A ACTIVADO
$activ_sql_al_desb="UPDATE `usuarios_shr` SET `ESTADO` = 'ACTIVADO' WHERE `usuarios_shr`.`AUTO` ='$id_autonum_b'"; 	
		 $stmt = $conn->prepare($activ_sql_al_desb); 
		  $stmt->execute();	
		  
		// INICIO DATOS EN PANTALLA
		if($id_bot_db_desb == "ACTUALIZAR DB"){ 
	 $scr_dbdesb ="<html><body><div align='center'>";
	$scr_dbdesb .=" <h3><u>ACTUALIZACION DBASE</u></h3>
	 <div>
	<span style='font-size: 18px; background-color:#8A4D00;'><font color =#FFFFFF>&nbsp;REGISTRO N°$id_autonum_b PERMISO ACTIVADO&nbsp;</font></span>
	</div>";	
	// MOSTRAR INDICATIVO
		if($id_tlic_b == "EA"){ 
	$scr_dbdesb .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp$id_ea_b&nbsp;&nbsp;</font></span>
	</div>";}
	if($id_tlic_b == "CB"){ 
	$scr_dbdesb .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp$id_cb_b&nbsp;&nbsp;</font></span>
	</div>";}
	if($id_tlic_b == "RADIOESCUCHA"){ 
	$scr_dbdesb .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp;$id_res_b&nbsp;&nbsp;</font></span>
	</div>";}

	$scr_dbdesb .="
	 	<div style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div> 
	</div></body></html>";
	print_r ($scr_dbdesb);						
		}
	if ($id_bot_desb == "DESBANEAR @"){
	echo "<br> <div align='center'> <h4 style='background-color:#370303; width: 275px;'><font color =#FFFFFF><u>USUARIO DESBANEADO</u></font></h4>  
 </div>";
	
		
			// INICIO CUERPO EMAIL
$mail_desb ="<html><body>

<div align='center' style=' background-color:#020216'>
		
<table align='center' width='100%' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
	<tr align='center'>
	<td><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";	
	$mail_desb .="
<tr align='center'> 
<td style='padding: 8px 0px 20px 0;'>
<a href='https://sevillahamradio.com/' title='sevillahamradio'><font style='background-color:#000000' color ='#aaffca'>** SEVILLAHAMRADIO.COM **</font></td></tr>";
	//	contenido  usuario desbaneado
		
	if($id_tlic_b == 'EA'){

$men_lic_b = $id_ea_b;
	 $asuntousr_desb ='Usuario '.$id_ea_b.'. Usuario desbaneado TeamSpeak. Radioenlace VHF-CB27Mhz.';
	 
	$asuntocop_desb ='Copia_Usuario '.$id_ea_b.'. Usuario desbaneado TeamSpeak. Radioenlace VHF-CB27Mhz.'; 
}	
if($id_tlic_b == 'CB'){
$men_lic_desb = $id_cb_b;

	 $asuntousr_desb ='Usuario '.$id_cb_b.'. Usuario desbaneado TeamSpeak. Radioenlace CB27Mhz.';
	 
	$asuntocop_desb ='Copia_Usuario '.$id_cb_b.'. Usuario desbaneado TeamSpeak. Radioenlace CB27Mhz.';  
}

if($id_tlic_b == 'RADIOESCUCHA'){
$men_lic_desb = $id_res_b;
	 $asuntousr_desb ='Usuario '.$id_res_b.'. Usuario baneado TeamSpeak. Radioenlace Radioescucha.';
	 
$asuntocop_desb ='Copia_Usuario '.$id_res_b.'. Usuario baneado TeamSpeak. Radioenlace Radioescucha.'; 
}
$mail_desb .="
		<tr align='center'>
    <td style='padding-bottom: 10px;'>
      
<span><font color = #ECEB21><u>USUARIO DESBANEADO</u></font></span>
</td></tr>
	<tr align='center'>
    <td style='padding-bottom: 20px;'>
<span>
<font color = #6af5ff>USUARIO <font color = #ffffff>$men_lic_desb</font><br>SERVICIO VOIP TEAMSPEAK<br>RADIOENLACE VHF-CB27Mhz</font></span></td>
</tr> </table>";
	$mail_desb .="
	<table align='center' width='300px' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
<tr align='center'>
    <td style='padding-bottom: 10px;' >	
	<span>
<font color = #ffd240>USUARIO DESBANEADO.</span>
</td></tr>";

if(!empty($adm_com_b)){
	
$mail_desb .="
	<tr align='left'>
    <td style='padding-bottom: 10px;'>
	<span><font color = #ffdfaa>Comentarios:</font>
	<font color =#95ffb7>$adm_com_b</font></span>
	
 </td></tr>";
	}	
	$mail_desb .="
		<tr align='center'>
    <td style='padding-bottom: 10px;'>
		<div style='padding-bottom: 5px;'>
<span><font color=#FFFFFF>Envie por Email las consultas o<br>modificaiones del registro.</font><span>	
    </div>
<a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'><font color='#00E3FF'>SEVILLAHAMRADIO@GMAIL.COM</font></a>
		</td></tr>";
		
$mail_desb .="
</table></div></body></html>
";	
	$mail_desbot .="
			
	 	 <div align='center' style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div>
		"; 

print_r ($mail_desb.$mail_desbot);
// ENVIO EMAIL	
	$cabeceras = 'From: registro@sevillahamradio.com' . "\r\n" .
	         'Content-type: text/html; charset=UTF-8' . "\r\n" .
	         'X-Mailer: PHP/' . phpversion();    
	   
	// sevillahamradio@gmail.com
	
	if(mail('emiliopvc@gmail.com', $asuntocop_desb, $mail_desb, $cabeceras)){
	mail($id_email_b, $asuntousr_desb,$mail_desb, $cabeceras);
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
