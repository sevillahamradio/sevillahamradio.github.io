<?php
session_start();
include("check.php"); 
?>
<html lang="es">
<head>
 <!--Pagina Web creada EMPC Copyright (c) 2024, Radioenlace VHF.-->
<meta charset="utf-8">
	<title>EMAIL APROBADO @</title>
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
    <a class="navbar-brand" href="#" style="color: #ffc880;"><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham" ><use href="../gfx/menuico.svg#flecha"></use> </svg>APROBADO @MAIL</a>
    	
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
<script> alert('ERROR EN EL REGISTRAR\\nNUMERO VACIO'); document.location.href='zpmen.php'</script>";
	 }
	
// llamada conexion
	require_once('conexion.php');
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
$id_bot_ap = $_POST['bt_aprob'];
$id_bot_db = $_POST['bt_aprob_db'];
$id_autonum = $_POST['numreg'];
$id_tlic = $_POST['tlic'];
$id_ea = $_POST['i_ea'];
$id_cb = $_POST['i_cb'];
$id_res = $_POST['i_res'];
$id_prov = $_POST['i_prov'];	
$id_email = $_POST['i_email'];
$adm_com = $_POST['adm_com'];

if ($id_bot_ap == "REG @ APROBADO" || $id_bot_db == "ACTUALIZAR DB"){
	// CREAR ALIAS Y ACTUALIZAR DB 
	
if($id_tlic =='EA'){
     if(!empty($id_ea)){
		 $ap_alias_ea = $id_autonum.'-'.$id_ea.'--'.$id_prov ;
 $activ_sql_al_ea="UPDATE `usuarios_shr` SET `ALIAS_EA` = '$ap_alias_ea' WHERE `usuarios_shr`.`AUTO` ='$id_autonum'"; 	
		 $stmt = $conn->prepare($activ_sql_al_ea); 
		  $stmt->execute();	 
	 }
  if(!empty($id_cb)){      
     $ap_alias_cb = $id_autonum.'-CB-'.$id_cb.'--'.$id_prov ;
  	$activ_sql_al_cb="UPDATE `usuarios_shr` SET `ALIAS_CB` = '$ap_alias_cb' WHERE `usuarios_shr`.`AUTO` ='$id_autonum'"; 	
		 $stmt = $conn->prepare($activ_sql_al_cb); 
		  $stmt->execute();	   
  }   

}
if($id_tlic =='CB'){
	if(!empty($id_cb)){
$ap_alias_cb = $id_autonum.'-CB-'.$id_cb.'--'.$id_prov ;
	$activ_sql_al_cb="UPDATE `usuarios_shr` SET `ALIAS_CB` = '$ap_alias_cb' WHERE `usuarios_shr`.`AUTO` ='$id_autonum'"; 	
		 $stmt = $conn->prepare($activ_sql_al_cb); 
		  $stmt->execute();	  	
	}
}
if($id_tlic =='RADIOESCUCHA'){	
$ap_alias_res =	$id_autonum.'-R-'.$id_res.'--'.$id_prov ;
$activ_sql_al_res="UPDATE `usuarios_shr` SET `ALIAS_RESC` = '$ap_alias_res' WHERE `usuarios_shr`.`AUTO` ='$id_autonum'"; 	
		 $stmt = $conn->prepare($activ_sql_al_res); 
		  $stmt->execute();	  	
}
// ACTUALIZAR REG APROBADO
$activ_sql_al_aprob="UPDATE usuarios_shr SET  REGISTRO = 'APROBADO' WHERE AUTO ='$id_autonum'"; 	
		 $stmt = $conn->prepare($activ_sql_al_aprob); 
		  $stmt->execute();	

// INICIO DATOS EN PANTALLA



	 if($id_bot_db == "ACTUALIZAR DB"){ 
	 $scr_db ="<html><body><div align='center'>";
	$scr_db .=" <h3><u>ACTUALIZACION DBASE</u></h3>
	 <div>
	<span style='font-size: 18px; background-color:#8A4D00;'><font color =#FFFFFF>&nbsp;REGISTRO N°$id_autonum APROBADO &nbsp;</font></span>
	</div>";
	// ALIAS
	if(!empty($ap_alias_ea) || !empty($ap_alias_cb) || !empty($ap_alias_res)){
	$scr_db .="
	 <div>
	<span style='font-size: 18px; background-color:#075a23;'><font color =#FFFFFF>&nbsp;&nbsp;ALIAS &nbsp;&nbsp;</font></span>
	</div>";
	
	if(!empty($ap_alias_ea)){
	$scr_db .="
	<span><font color = #9aff15>$ap_alias_ea</font></span> <br>";}
	
	if(!empty($ap_alias_cb)){
	$scr_db .="
	<span><font color = #9aff15>$ap_alias_cb</font></span><br>";}
	if(!empty($ap_alias_res)){
	$scr_db .="
	<span><font color = #9aff15>$ap_alias_res</font></span><br>";}
	}
		$scr_db .="
	 	<div style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div> 
	</div></body></html>";
	print_r ($scr_db);
	 }

		
if ($id_bot_ap == "REG @ APROBADO"){
// <h6><<< @EMAIL ENVIADO >>></h6>
echo "<br> <div align='center'> <h4 style='background-color:#09053D; width: 275px;'><font color =#FFFFFF><u>REGISTRO APROBADO</u></font></h4>  
 </div>";

	// INICIO CUERPO EMAIL
$mail_p ="<html><body>
 <div align='center' style=' background-color:#43211c'>
		
<table align='center' width='100%' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
	<tr align='center'>
	<td><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";
	
$mail_p .="
<tr align='center'> 
<td style='padding: 8px 0px 20px 0;'>
<a href='https://sevillahamradio.com/' title='sevillahamradio'><font style='background-color:#000000' color ='#aaffca'>** SEVILLAHAMRADIO.COM **</font></td></tr>";

$mail_p .="
<tr align='center'>
    <td style='padding-bottom: 20px;'><span style='background-color:#000000'>
<font color = yellow><u><< REGISTRO APROBADO >></u></font></span></td></tr>";

if($id_tlic == 'EA'){
$men_lic = $id_ea;
$m_est = 'ESTACION EA O EQUIVALENTE';
	 $asuntousr ='Usuario '.$id_ea.'. Registro aceptado TeamSpeak. Radioenlace VHF-CB27Mhz.';
	 
	$asuntocop ='Copia_Usuario '.$id_ea.'. Registro aceptado TeamSpeak. Radioenlace VHF-CB27Mhz.'; 
}


if($id_tlic == 'CB'){
$men_lic = $id_cb;
$m_est = 'ESTACION CB';
	 $asuntousr ='Usuario '.$id_cb.'. Registro aceptado TeamSpeak. Radioenlace CB27Mhz.';
	 
	$asuntocop ='Copia_Usuario '.$id_cb.'. Registro aceptado TeamSpeak. Radioenlace CB27Mhz.';  
}

if($id_tlic == 'RADIOESCUCHA'){
$men_lic = $id_res;
$m_est = 'RADIOESCUCHA';
	 $asuntousr ='Usuario '.$id_res.'. Registro aceptado TeamSpeak. Radioenlace Radioescucha.';
	 
$asuntocop ='Copia_Usuario '.$id_res.'. Registro aceptado TeamSpeak. Radioenlace Radioescucha.'; 
}

$mail_p .="
<tr align='center'>

    <td style='padding-bottom: 20px;'><span>
<font color = #57f314>BIENVENIDO ESTACION<br> <font color = #ffffff>$men_lic</font><br>SERVICIO VOIP TEAMSPEAK<br>RADIOENLACE VHF-CB27Mhz</font></span></td>

</tr> </table>";
	
	$mail_p .="
	<table align='center' width='300px' cellpadding='0' cellspacing='0' border='0'>
	<tbody>

<tr align='left'>
    <td style='padding-bottom: 10px;'>
	<span><font color = #74e8e8>&nbsp;DATOS CONFIGURACION TEAMSPEAK:</font></span>
</td></tr>";
		$mail_p .="
<tr align='left'>
    <td  width='100px' style='padding-bottom: 10px;' >	
	<span>
<font color = #ffffff>&nbsp;Servidor:&nbsp;</font><font color =#ffe715>radioenlace.hopto.org</font></span>
</td></tr>";

	// LICENCIA EA
	if($id_tlic == 'EA'){
	 if(!empty($ap_alias_ea)){
			$mail_p .="
<tr align='left'>
    <td style='padding-bottom: 5px;'>
<div style='padding-bottom: 5px;'>
 <span><font color = #aaffb5>
&nbsp;<u>Perfil VHF</u></font></span>  
</div>        
<span><font color = #ffffff>&nbsp;Alias:&nbsp;</font><font color =#ffe715>$ap_alias_ea</font></span></td></tr>";
	}
	if(!empty($ap_alias_cb)){
	$mail_p .="
<tr align='left'>  
    <td style='padding-bottom: 5px;'>
<div style='padding-bottom: 5px;'>
 <span><font color = #aaffb5>
&nbsp;<u>Perfil CB</u></font></span>  
</div>  
 <span><font color = #ffffff>&nbsp;Alias:&nbsp;</font><font color =#ffe715>$ap_alias_cb</font></span>
 </td></tr>"; }    
	}
	
	// LICENCIA CB
	if($id_tlic == 'CB'){
	if(!empty($ap_alias_cb)){
	$mail_p .="
<tr align='left'> 
 <td style='padding-bottom: 5px;'>
<div style='padding-bottom: 5px;'>
 <span><font color = #aaffb5>
&nbsp;<u>Perfil CB</u></font></span>  
</div>  
 <span><font color = #ffffff>&nbsp;Alias:&nbsp;</font><font color =#ffe715>$ap_alias_cb</font></span>
 </td></tr>"; }
	}
	// LICENCIA RADIOESCUCHA 
	if($id_tlic == 'RADIOESCUCHA'){
	if(!empty($ap_alias_res)){
	$mail_p .="
<tr align='left'> 
 <td style='padding-bottom: 5px;'>
<div style='padding-bottom: 5px;'>
 <span><font color = #aaffb5>
&nbsp;<u>Perfil Radioescucha</u></font></span>  
</div>  
 <span><font color = #ffffff>&nbsp;Alias:&nbsp;</font><font color =#ffe715>$ap_alias_res</font></span>
 </td></tr>"; }
	}
		$mail_p .="
<tr align='left'>
    <td style='padding-bottom: 10px;'><span>
<font color = #ffffff>&nbsp;Contraseña:</font>
<font color =#ffe715>(SIN DATOS)</font></span> </td></tr>";

	if(!empty($adm_com)){
	
$mail_p .="
	<tr align='left'>
    <td style='padding-bottom: 10px;'>
	<span><font color = #ffffff>&nbsp;Comentarios:</font>
	<font color =#ffe715>$adm_com</font></span>
	
 </td></tr>";
	}
	
$url_id	= 'https://sevillahamradio.com/php/simulador.php?id_url='.$id_autonum ;
	
	$mail_p .="
<tr align='center'>
    
    <td style='padding:8px 0px 18px 0px;'>
  <div width='300px' style=' color: #baff80; border-style: solid; padding: 8px 0px 8px 0px;'>
	<div style='padding-bottom:3px;'>
	<span style='font-size: 16px'>
<font color = #74e8e8>&nbsp;SIMULADOR PERFIL TEAMSPEAK:</font>
</span>
   </div>
<a style='font-size: 18px;  background-color:#170099;' href='$url_id'><u><font color='#ffffff'>>>SIMULACION PERFIL<<</u></font></a>
</div>
</td></tr>

	<tr align='left'>
    <td style='padding-bottom: 15px;'>
    
<span><font color='#f8ff00'><u>-.USUARIOS EA O EQUIVALENTE:</u></font></span>
<br>
<div style= 'padding-top: 5px;'>
<span>
<font color='#ffffff'>AL ENTRAR POR PRIMERA VEZ EN LA SALA VHF EL MICROFONO ESTARÁ <u>INHABILITADO</u>.</span>
</div>
<div style='padding-top: 5px;'>
<span></font><font color='#90ff2b'>
EL ADMINISTRADOR TE CONCEDERÁ EL PERMISO CORRESPONDIENTE.</font></span>
</div>
</td></tr>
	<tr align='left'>
<td style='padding-bottom: 10px;'>
 
<span><font color='#f8ff00'><u>-.USUARIO RADIOESCUCHA:</u></font></span><br> 
<div style= 'padding-top:5px;'>
<span><font color='#ffffff'> 
INHABILITADO EL USO DEL MICROFONO PERMANENTEMENTE.</font></span>
</div>
</td></tr>

<tr align='center'>
<td style='padding-bottom: 10px;'>
<a href='https://sevillahamradio.com/teamspeak.html'><font color='#00FF9B'>MANUAL INSTALACION<br><u>TEAMSPEAK</u></font><a>
</td></tr>
<tr align='center'>
<td style='padding-bottom: 10px;'>
    
<div width='300px' style=' color: #95e0ff; border-style: solid; padding: 8px 0px 8px 0px;'>
    
<div style='padding-bottom: 5px;'>
<span><font color=#FFFFFF>Envie por Email las consultas o<br>modificaciones del registro</font></span>	
    </div>
<a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'><font color='#00E3FF'>SEVILLAHAMRADIO@GMAIL.COM</font></a>
</td></tr>
<tr align='center'>
<td style='padding-bottom: 10px;'>
<span style='font-size: 20px;'><font color='#ffd295'> Administrador. Un saludo 73.</font></span>
</td></tr>
</table></div></body></html>";
		
			$mail_pbot .="
			
	 	 <div align='center' style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div>
		";
		print_r ($mail_p.$mail_pbot);
// ENVIO EMAIL	
	 
	$cabeceras = 'From: registro@sevillahamradio.com' . "\r\n" .
	         'Content-type: text/html; charset=UTF-8' . "\r\n" .
	         'X-Mailer: PHP/' . phpversion();    
	   
	// sevillahamradio@gmail.com
	
	if(mail('sevillahamradio@gmail.com', $asuntocop, $mail_p, $cabeceras)){
	mail($id_email, $asuntousr,$mail_p, $cabeceras);
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
	
