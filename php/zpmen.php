<?php
session_start();
include("check.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--Pagina Web creada EMPC Copyright (c) 2024, Radioenlace VHF-->    
	<meta charset="utf-8">
	<title>ZONA PRIVADA</title>
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
  <div align="center">  
<img src="../gfx/banner.png" alt="Banner SevillaHamRadio" width="750" height="150" class="img-fluid"></div>
	<!-- MENU PRINCIPAL -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="color:#ffc880;" ><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham"><use href="../gfx/menuico.svg#flecha"></use> </svg>ZONA PRIVADA</a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
        
      <li class="nav-item"> <a class="nav-link" href="../index.html"> <svg viewBox="0 0 576 576" Fill="#868686" class="menuicosvg"> <use href="../gfx/menuico.svg#homeico"></use></svg>INICIO</a> </li>
		
      <li class="nav-item"> <a class="nav-link" href="../radioenlace.html"> <svg viewBox="0 0 24 24" Fill="#868686" class="icoradio"> <use href="../gfx/menuico.svg#radioenlico"></use></svg>RADIOENLACE</a> </li>
		
	  	<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 24 24" fill="#868686" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg>TEAMSPEAK</a>
			
       <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
		  	<a class="dropdown-item" href="../teamspeak.html"> <svg viewBox="0 0 24 24" fill="#868686" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg> <b>INICIO TEAMSPEAK </b></a> 
		   		   				
		<!--	<a class="dropdown-item" href="../users_team.html"><b>LISTA USUARIOS</b></a> -->
			<a class="dropdown-item" href="../registro.html"><svg viewBox="0 0 512 512" fill="#868686" class="icoregi"> <use href="../gfx/menuico.svg#regico"></use></svg><b>REGISTRO USUARIO</b></a>
		     <div class="dropdown-divider"></div>    
			 		   
		   <a  class="dropdown-item" href="../man_team_android.html"><svg viewBox="0 0 413.137 413.137" fill="#868686" class="icoregi"> <use href="../gfx/menuico.svg#androico"></use></svg><b>MANUAL ANDROID</b></a>
			<a  class="dropdown-item" href="../man_team_win.html"><svg viewBox="0 0 164.11 144.637" fill="#868686" class="icoteam"> <use href="../gfx/menuico.svg#winico"></use></svg> <b>MANUAL WINDOWS</b></a>   
		   			            			
		    </div>			
       </li>
		
	  	  <li class="nav-item"> <a class="nav-link" href="../eventos.html"><svg viewBox="0 0 452.986 452.986" Fill="#868686" class="icoevent"> <use href="../gfx/menuico.svg#eventico"></use></svg>EVENTOS</a></li>
	  	  <!-- 
	<li class="nav-item"> <a class="nav-link" href="merca.html"><svg viewBox="0 0 512 512" Fill="#868686" class="icomerca"> <use href="gfx/menuico.svg#mercaico"></use></svg>RADIOMERCA</a></li>
	-->
	 		   <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 256 256" fill="#00ff2d" class="icoabout"> <use href="../gfx/menuico.svg#qsomosico"></use></svg>ABOUT</a>
		  
       <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
			<a STYLE= "color: black;" class="dropdown-item active"><svg viewBox="0 0 24 24" fill="gold" class="icopriva"> <use href="../gfx/menuico.svg#privico"></use></svg><b>ZONA PRIVADA</b></a>		
	   </div>							  
		  
		</li>  
	</ul>  
 </div>
  </nav>	
<br>
<!-- FIN MENU PRINCIPAL html -->	

<!-- INICIO HTML ZONA ADMIN -->
<div align="center">
 <div style= "max-width: 300px;">
		<h4><font color="#05E3FF">ZONA ADMINISTRADOR</font></h4>
 </div>
      
<!--  busqueda numero registro-->
     
 <form action="" method="post" id="form_busq" name="form_busq"> 
 <label for="breg">NUMERO REGISTRO:</label> 
 <input style="width: 4em;" type="number" name="breg" id="breg" required>
  <br>   
	 
	<!-- MENU CONSULTA Y GENERAL -->	 
	 <div>
	  	  		 
   <select style="width: 15em; margin: 10px 0 8px 0px;" name="menu" id="menu">
  <optgroup label="REGISTRO">	   
  <option value="1">CONSULTA</option>     
  <option value="2">APROBAR</option>
  <option value="3">DENEGAR</option>
   </optgroup>   
<optgroup label="PERMISOS TSPEAK">  
<option value="4">PTE-ACTIVAR</option>	
<option value="5">ACTIVADO</option>
<option value="6">BANEADO</option> 
	 </optgroup>  
	   <optgroup label="EDITAR REGISTRO">
  <option value="7">LICENCIA</option> 
  <option value="8">INDICATIVO</option>
  <option value="9">DAT_PERSONALES</option>   
   </optgroup>
  <optgroup label="LISTA USUARIO"> 
	   <option value="10">USUARIOS REG.</option>
  </optgroup>	  
    <optgroup label="@MAIL"> 
	   <option value="11">@EMAIL MASIVO</option>
  </optgroup>	  
  
</select>
	 </div>
<!-- MENU EDIT LICENCIA -->	 
 <div id="divm_lc" style="display:none">
  <label style="background-color:#27238c " for="menu_lic"><font color="#ffdc55">&nbsp;EDITAR LICENCIA&nbsp;</font></label>
      <br>
   <select style="width: 10em; margin: 0px 0 8px 0px;" name="menu_lic" id="menu_lic">    
<optgroup label="EDITAR LICENCIA">    
  <option value="1">EA-EQUIV</option>
  <option value="2">CB 27MHZ</option>	
  <option value="3">RADIOESCUCHA</option>
  </optgroup>
</select>
 </div>		 
<!-- MENU EDIT INDICATIVO -->			 
<div id="divm_ind" style="display:none">
    <label style="background-color:#27238c " for="menu_indi"><font color="#ffdc55">&nbsp;EDITAR INDICATIVO&nbsp;</font></label>
    <br>  
   <select style="width: 10em; margin: 0px 0 8px 0px;" name="menu_indi" id="menu_indi" >      
  <optgroup label="EDIT_INDICATIVO">      
  <option value="1">EA-EQUIV</option>
  <option value="2">CB 27MHZ</option>	
  <option value="3">RADIOESCUCHA</option>
  </optgroup> 
</select>
 </div>	
<!-- MENU EDIT DATOS PERSONALES -->	
	<div id="divm_dpers" style="display:none">
	    <label style="background-color:#27238c " for="menu_pers"><font color="#ffdc55">&nbsp;EDITAR DATOS PERSONALES&nbsp;</font></label>
	    <br>
   <select style="width: 11em; margin: 0px 0 8px 0px;" name="menu_pers" id="menu_pers">        
  <optgroup label="DAT_PERSONALES">     
  <option value="1">NOMBRE</option>
  <option value="2">LOCALIDAD</option>	
  <option value="3">PROVINCIA</option>
  <option value="4">PAIS</option>
  <option value="5">@EMAIL</option>	
  <option value="6">TELEFONO</option>
  <option value="7">COMENTARIOS</option>	   
  </optgroup> 
</select>
 </div>	
 		 	 		 
	<div style="padding: 8px 0px 8px 0px;">
	    <div id="div_btb">
  <button style="margin: 4px 0px 6px 0px;" type="submit" value="b_buscar" class="btn btn-success" id="b_buscar" >&nbsp;&nbspBUSCAR&nbsp;&nbsp</button> 
  </div>
  <button style="margin: 6px 0px 8px 0px;" type="button" class="btn btn-warning" id="b_reset" >&nbsp;&nbsp;&nbsp&nbsp;SALIR&nbsp;&nbsp;&nbsp;&nbsp</button>
   </div>
</form>	
</div>	
<script> 
  //GUARDAR INPUT BUSQ
let serverInput = document.getElementById('breg'); 
   let saveButton = document.getElementById('b_buscar'); saveButton.addEventListener('click', () => { localStorage.setItem('serverValue', serverInput.value); }); window.addEventListener('DOMContentLoaded', () => 
{ let savedServer = localStorage.getItem('serverValue'); 
 if (savedServer) { serverInput.value = savedServer; } });  
 // FIN COD MANTENER INPUT 
    
	// Dar valor nulo input buscar	
var b_reset = document.getElementById('b_reset');  
b_reset.onclick = function(e){
document.getElementById("breg").value = "";
document.getElementById("menu").value= "";
document.getElementById("form_busq").submit();
};  

	// script select menu 
		$('#menu').on('change',function(){ 
 var selectValor = $(this).val();
        //alert (selectValor); 
  // ocultar menu lic, ind, dat_per
if (selectValor == '1'||selectValor =='2'||selectValor == '3'||selectValor == '4'||selectValor =='5'||selectValor == '6') {	
			 $('#divm_lc').hide() ;	
			 $('#divm_ind').hide() ;
		 $('#divm_dpers').hide();
 }	
  if (selectValor == '1'){
	  $('#div_qrz').show() ;
	  document.querySelector('#b_buscar').textContent = 'BUSCAR';
  }else{$('#div_qrz').hide() ;}
			
if (selectValor == '2'||selectValor =='3'||selectValor =='6'){document.querySelector('#b_buscar').textContent = 'ENTRAR@';			  
   }  
  
	if (selectValor == '4'||selectValor =='5'){
		document.querySelector('#b_buscar').textContent = 'MODIFICAR';
	}				
  // visible menu licencia
		if (selectValor == '7') {
			 $('#divm_lc').show() ;	
			 $('#divm_ind').hide() ;
			 $('#divm_dpers').hide();	
			{document.querySelector('#b_buscar').textContent = 'ENTRAR';}  
  }		
	// visible menu indicativo	
	 if (selectValor == '8') {
		 $('#divm_ind').show() ;
		 $('#divm_lc').hide() ;
		 $('#divm_dpers').hide();
		  document.querySelector('#b_buscar').textContent = '- EDITAR -';
	 }	
	// visible menu datos personales
	 if (selectValor == '9') {
		 $('#divm_dpers').show();
		 $('#divm_lc').hide() ;
		 $('#divm_ind').hide() ;	 
		document.querySelector('#b_buscar').textContent = '- EDITAR -'; 	 
	 }			
		
		
	if (selectValor == '10'){	
		$('#breg').removeAttr('required');
		$('#breg').val('');
		 window.open('user.php', '_blank');
	}
	
	if (selectValor == '11'){	
		$('#breg').removeAttr('required');
		$('#breg').val('');
		document.querySelector('#b_buscar').textContent = 'ENTRAR';	
		
	}
	
		});
		
		
		
</script>	
	
<?php
	setlocale(LC_ALL, 'es_ES');
	// llamada conexion
	require_once('conexion.php');
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// BUSQUEDA NUM REGISTRO

  if(!empty($_POST))
   {
	  $busqreg = $_POST['breg'];	      
      $sql ="SELECT * FROM usuarios_shr WHERE AUTO ='$busqreg' LIMIT 1";
      $result = $conn->query($sql);
// RESULTADO BUSQUEDA 	  
  while($mostrar=mysqli_fetch_array($result)){
$num_reg = $mostrar['AUTO'];
$ind_ea =$mostrar['IND_EA'];
$ind_cb = $mostrar['IND_CB'];
$ind_resc = $mostrar['IND_RESC'];
$tipo_lic = $mostrar['TIPO_LIC'];	  
$registro = $mostrar['REGISTRO'];     
$estado = $mostrar['ESTADO'];  
$nombre = $mostrar['NOMBRE'];
$localidad = $mostrar['LOCALIDAD'];	
$provincia = $mostrar['PROVINCIA'];	
$pais = $mostrar['PAIS']; 
$email = $mostrar['EMAIL'];
$telefono = $mostrar['TELEFONO'];
$comentarios = $mostrar['COMENTARIOS'];
$alias_ea = $mostrar['ALIAS_EA'];
$alias_cb = $mostrar['ALIAS_CB']; 
$alias_resc = $mostrar['ALIAS_RESC'];
}
// Pantalla general visualizacion mysql
	
	$reg_scr_cons ="<html><body>";     
     
	  // opcion 1 consulta
	  
	  if($_POST['menu'] == 1 ) {  
	  if (empty($num_reg))  { 
	echo "<script> alert(' REGISTRO NO EXISTE'); 
			</script>";
		  exit();
		  
		} 
 if($tipo_lic == "EA"){ 
	 if (!empty($ind_resc)) {
		 $alert_ind = 'ERROR EN EL REGISTRO\\n EN EL TIPO LICENCIA EA\\nDETECTADO INDICATIVO RADIOESCUCHA\\n>>> '.$ind_resc.' <<<';
			 }
			
		 if (!empty($ind_ea)) {
		 $busqgoo= 'https://www.google.com/search?q=';
						  $busqgoo.= $ind_ea;
						  $busqqrz= 'https://www.qrz.com/db/';
						  $busqqrz.= $ind_ea;
		 }
	 }
		if($tipo_lic == "CB"){
			if (!empty($ind_ea)) { 
	$alert_ind = 'ERROR EN EL REGISTRO\\n EN EL TIPO LICENCIA CB\\nDETECTADO INDICATIVO EA\\n>>> '.$ind_ea.' <<<'; 	
		}
			
		  if (!empty($ind_cb)) {
		 $busqgoo= 'https://www.google.com/search?q=';
						  $busqgoo.= $ind_cb;
						  $busqqrz= 'https://www.qrz.com/db/';
						  $busqqrz.= $ind_cb;	
		}  
	  }	
			  
	if($tipo_lic == "RADIOESCUCHA"){
		 if (!empty($ind_ea)) { 
			$alert_ind = 'ERROR EN EL REGISTRO\\n EN EL TIPO LICENCIA RADIOESCUCHA\\nDETECTADO INDICATIVO EA\\n>>> '.$ind_ea.' <<<'; 
			}
		if (!empty($ind_cb)) { 
			$alert_ind ='ERROR EN EL REGISTRO\\n EN EL TIPO LICENCIA RADIOESCUCHA\\nDETECTADO INDICATIVO CB\\n>>> '.$ind_cb.' <<<';
			}	  
		
		  if (!empty($ind_resc)) {
		 $busqgoo= 'https://www.google.com/search?q=';
						  $busqgoo.= $ind_resc;
						  $busqqrz= 'https://www.qrz.com/db/';
						  $busqqrz.= $ind_resc;	 
		  }
		}  
		if (!empty($alert_ind)){ echo " 
		<script> alert('$alert_ind') </script>";  
	  }
	echo "<div id='div_qrz' align='center'>  
   <span><font color ='#bfd5ff'><<- BUSCAR INDICATIVO ->></font></span><br>
   <button type='button'  class='btn btn-outline-light' style='margin: 8px 0px 8px 0px;' onclick=\"window.open('$busqqrz', '_blank')\">&nbsp;&nbsp;&nbsp;&nbsp;QRZ&nbsp;&nbsp;&nbsp;&nbsp;</button>
    <button type='button' class='btn btn-outline-light' style='margin: 8px 0px 8px 0px;' onclick=\"window.open('$busqgoo', '_blank')\" >GOOGLE</button>
	</div>	
   ";	 	  		  	  
  }
 // opcion 2 REGISTRO APROBADO
         
	  
	  if($_POST['menu'] == 2) {  
		  	if (empty($num_reg)) { 
	echo "<script> alert(' REGISTRO NO EXISTE'); 
			</script>";
		}else{   	
		// ocultar boton y menu
			
		?>
		<script>
		  $('#div_btb').hide();
	$('#menu option[value=2]').attr({selected: true});	  
		  
		   $('#menu').prop('disabled', true);
		 $('#breg').prop('disabled', true);  
		 
		  </script>
		  <?php
		 
	if (empty($registro)){ 
		$alert_mj='REGISTRO VACIO Nº'.$num_reg.'\\nENTRADO EN EL MENU APROBAR'; } 
	   
	if ($registro == "APROBADO") {
	   $alert_mj='REGISTRO APROBADO Nº'.$num_reg.'\\nENTRADO EN EL MENU APROBAR';
	 }
	
	if ($registro == "PTE-APROBAR"){
		$alert_mj='PTE-APROBAR Nº'.$num_reg.'\\nENTRADO EN EL MENU APROBAR';  }	 
	
	if ($registro == "DENEGADO") {			 
	$alert_mj='REGISTRO DENEGADO Nº'.$num_reg.'\\nENTRADO EN EL MENU APROBAR';}
	
		 echo "<script> alert('$alert_mj'); 
			</script>";

//MENSAJE PANTALLA ESTADO APROBADO
$reg_scr_cons .="<div align='center'>
    <div id='div_apr' class='maninsbox'>
        
<div style='margin-bottom:4px;'>
    
<span style='font-size: 18px; background-color:#2a4865;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR  REGISTRO Nº$num_reg</u>&nbsp;</font></span>
</div>

<span style='font-size: 20px; background-color:#388c00;'><font color ='#FFFFFF'>&nbsp;APROBAR USUARIO&nbsp;</font></span>
      <form id='form_reg' action='env_aprob.php' method='post'> 
	  
<input type='hidden' id='numreg' name='numreg' value='$num_reg'>
    
<input type='hidden' name='tlic' id='tlic' value='$tipo_lic'>

<input type='hidden' id='i_ea' name='i_ea' value='$ind_ea'>  

<input type='hidden' id='i_cb' name='i_cb' value='$ind_cb'>

<input type='hidden' id='i_res' name='i_res' value='$ind_resc'>
<input type='hidden' id='i_prov' name='i_prov' value='$provincia'>

<input type='hidden' id='i_email' name='i_email' value='$email'>

  <input style='margin: 10px 0px 15px 0px;' id='bt_aprob' form='form_reg' type='submit' name='bt_aprob'  value='REG @ APROBADO' class='btn btn-primary' > 
  <br>
 <input style='margin: 1px 0px 4px 0px;' id='bt_aprob_db' form='form_reg' type='submit' name='bt_aprob_db'  value='ACTUALIZAR DB' class='btn btn-secondary' >  
 <br>
  <span><font color =#FFFFFF>Actualizar DB únicamente<br>actualiza la base de datos<br>sin enviar @mail.</span>
 <br>
   	<label class='reglab' for='adm_com'><u>ADMINISTRADOR COMENTARIOS:</u> </label>
		 <br>
	  <textarea id='adm_com' name='adm_com' maxlength='500' cols='30' rows='5' placeholder='En este apartado puedes indicar observaciones o el motivo del reenvio del registro'></textarea>	
<br></form>";
	  
   // busqueda indicativo en google y qrz 
   if($tipo_lic == "EA"){ $busqgoo= 'https://www.google.com/search?q=';
						  $busqgoo.= $ind_ea;
						  $busqqrz= 'https://www.qrz.com/db/';
						  $busqqrz.= $ind_ea;
		$reg_scr_cons .= "  
   <span><font color ='#bfd5ff'><<- BUSCAR INDICATIVO ->></font></span><br>
   <button type='button'  class='btn btn-outline-light' style='margin: 8px 0px 8px 0px;' onclick=\"window.open('$busqqrz', '_blank')\">&nbsp;&nbsp;&nbsp;&nbsp;QRZ&nbsp;&nbsp;&nbsp;&nbsp;</button>
    <button type='button' class='btn btn-outline-light' style='margin: 8px 0px 8px 0px;' onclick=\"window.open('$busqgoo', '_blank')\" >GOOGLE</button>
		
   ";}	 
   $reg_scr_cons .= "  
   </div> </div>";}		 
}
	
	// FIN CAMBIO ESTADO APROBADO  

//INICIO CAMBIO ESTADO DENEGADO 
	 
	 if($_POST['menu'] == 3) {
		 
		  	if (empty($num_reg)) { 
	echo "<script> alert(' REGISTRO NO EXISTE'); 
			</script>";
		}else{   	 
		
		// ocultar boton y menu
				?>
		<script>
		  $('#div_btb').hide();
	$('#menu option[value=3]').attr({selected: true});	  		  
$('#menu').prop('disabled', true); $('#breg').prop('disabled', true); 
		  </script>
		  <?php
		
		if(!empty($registro)){
	
 if($registro == "PTE-APROBAR"){
			$alert_mj='PTE-APROBAR Nº'.$num_reg.'\\nENTRANDO EN EL MENU DENEGADO';}		
			
	    if($registro == "DENEGADO") {
			$alert_mj= 'REGISTRO DENEGADO Nº'.$num_reg.'\\nENTRANDO EN EL MENU DENEGADO';}	 	
	
		 if($registro == "APROBADO") {
			$alert_mj= 'REGISTRO APROBADO Nº'.$num_reg.'\\nENTRANDO EN EL MENU DENEGADO';		
	}	 
		echo "<script> alert('$alert_mj'); </script>";		        

	//MENSAJE PANTALLA ESTADO DENEGADO
 $reg_scr_cons .="<div align='center'>
	<div id='div_den' class='maninsbox'>				
<div style='margin-bottom:4px;'>
<span style='font-size: 18px; background-color:#2a4865;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR  REGISTRO Nº$num_reg</u>&nbsp;</font></span>
</div>
<span style='font-size: 20px; background-color:#a20d28;'><font color ='#FFFFFF'>&nbsp;DENEGAR USUARIO&nbsp;</font></span>				 
      <form id='form_den' action='env_den.php' method='post'>
          
<input type='hidden' id='numreg' name='numreg' value='$num_reg'>
    
<input type='hidden' name='tlic' value='$tipo_lic'>

<input type='hidden' id='reg_env' name='i_ea' value='$ind_ea'>  

<input type='hidden' name='i_cb' value='$ind_cb'>

<input type='hidden' name='i_res' value='$ind_resc'>
<input type='hidden' id='i_email' name='i_email' value='$email'>
  
  <input style='margin: 10px 0px 15px 0px;' id='bt_den' form='form_den' type='submit' name='bt_den'  value='REG @ DENEGADO' class='btn btn-primary' > 
     
 <br>
 <input style='margin: 1px 0px 4px 0px;' id='bt_den_db' form='form_den' type='submit' name='bt_den_db'  value='ACTUALIZAR DB' class='btn btn-secondary' >  
 <br>
  <span><font color ='#FFFFFF'>Actualizar DB únicamente<br>actualiza la base de datos<br>sin enviar @mail.</span>
 <br>
   	<label class='reglab' for='adm_com'><u>ADMINISTRADOR COMENTARIOS:</u> </label>
		 <br>
	  <textarea id='adm_com' name='adm_com' maxlength='500' cols='30' rows='5' placeholder='En este apartado puedes indicar observaciones o el motivo del reenvio del registro'></textarea>	
<br> </form>  
   "; 
   
   // busqueda indicativo en google y qrz 
   if($tipo_lic == "EA"){ $busqgoo= 'https://www.google.com/search?q=';
						  $busqgoo.= $ind_ea;
						  $busqqrz= 'https://www.qrz.com/db/';
						  $busqqrz.= $ind_ea;
		$reg_scr_cons .= "
   <span><font color ='#bfd5ff'><<- BUSCAR INDICATIVO ->></font></span><br>
   <button type='button' class='btn btn-outline-light' style='margin: 8px 0px 8px 0px;' onclick=\"window.open('$busqqrz', '_blank')\">QRZ</button>
    <button type='button' class='btn btn-outline-light' style='margin: 8px 0px 8px 0px;' onclick=\"window.open('$busqgoo', '_blank')\" >GOOGLE</button>
   ";}	 				  
   $reg_scr_cons .= "</div> </div>";
	 }
}
		}
// FIN CAMBIO ESTADO DENEGADO

// INICIO CAMBIO ESTADO
// ESTADO PTE-ACTIVAR

if($_POST['menu'] == 4) {
		if (empty($num_reg)) { 
	echo "<script> alert(' REGISTRO NO EXISTE'); 
			</script>";
		}else{   	 	
		
if (empty($num_reg) || $estado == 'PTE-ACTIVAR' || $registro == 'PTE-APROBAR' || $registro == 'DENEGADO' )   { 
   if (empty($num_reg)) {  
      $alert_mj ="REGISTRO NO EXISTE";  
   }
  
   if ($estado == 'PTE-ACTIVAR'){
	  $alert_mj = 'TEAMSPEAK PTE-ACTIVAR Nº'.$num_reg.'\\nESTADO ACTUAL PTE-ACTIVAR'; 
   }
	
	if($registro == 'PTE-APROBAR'){
		$alert_mj= 'USUARIO PTE-APROBAR REG Nº'.$num_reg.'\\nNO SE PUEDE CAMBIAR ESTADO\\nSIN ESTAR ACEPTADO  EL REGISTRO';
	}	
	
	if($registro == 'DENEGADO'){ 
		$alert_mj = 'ATENCION REGISTRO DENEGADO Nº'.$num_reg.'\\nNO SE PUEDE CAMBIAR ESTADO\\nSIN ESTAR ACEPTADO EL USUARIO';
	}
	
	echo "<script>alert('$alert_mj');</script>";
	 ?>  
	<script>
		document.getElementById("menu").value= "1" ;
		document.getElementById("breg").value = localStorage.getItem('serverValue'); 
		document.getElementById("form_busq").submit();
	</script>
	  <?php
	// exit();
}
   if(empty($estado) || $estado =='ACTIVADO' || $estado == 'BANEADO'){	
     	if(empty($estado)){
		 $alert_mj = 'ESTADO VACIO Nº'.$num_reg.'\\n SE VA CAMBIAR AL ESTADO PTE-ACTIVAR'; 	
		}
	if($estado == 'ACTIVADO'){ 
	$alert_mj = 'TEAMSPEAK ACTIVADO Nº'.$num_reg.'\\nSE VA CAMBIAR AL ESTADO PTE-ACTIVAR';
	}
	if($estado == 'BANEADO'){ 
	$alert_mj = 'ATENCION USUARIO BANEADO Nº'.$num_reg.'\\nSE VA ELIMINAR ESTADO BANEADO\\nY CAMBIAR A ESTADO PTE-ACTIVAR'; }
	echo "<script>alert('$alert_mj');</script>"; 
		   $activ_sql_est="UPDATE `usuarios_shr` SET `ESTADO` = 'PTE-ACTIVAR' WHERE `usuarios_shr`.`AUTO` ='$busqreg' ";	
		 $stmt = $conn->prepare($activ_sql_est); 
		  $stmt->execute();
	  ?>  
	<script>
		document.getElementById("menu").value= "1" ;
		document.getElementById("breg").value = localStorage.getItem('serverValue'); 
		document.getElementById("form_busq").submit();
	</script>
	  <?php
  
     // echo "<script>location.reload();</script>";   
   }
}
}
// ESTADO ACTIVADO

if($_POST['menu'] == 5) {
		if (empty($num_reg)) { 
	echo "<script> alert(' REGISTRO NO EXISTE'); 
			</script>";
		}else{ 
			
	if ($estado == 'ACTIVADO' || $registro == 'PTE-APROBAR' || $registro == 'DENEGADO' )   { 
	 
		if ($estado == 'ACTIVADO'){
	  $alert_mj = 'TEAMSPEAK ACTIVADO Nº'.$num_reg.'\\nESTADO ACTUAL ACTIVADO'; 	
			}	
if($registro == 'PTE-APROBAR'){
		$alert_mj= 'NO SE PUEDE CAMBIAR \\nESTADO REG Nº'.$num_reg.'\\nUSUARIO PTE-APROBAR';
	}	
		
	if($registro == 'DENEGADO'){ 
	$alert_mj = 'ATENCION USUARIO DENEGADO Nº'.$num_reg.'\\nPARA PODER ACTIVARLO\\nPRIMERO TIENE QUE ESTAR\\nREGISTRO APROBADO'; }
				
	echo "<script>alert('$alert_mj');</script>";
	 ?>  
	<script>
		document.getElementById("menu").value= "1" ;
		document.getElementById("breg").value = localStorage.getItem('serverValue'); 
		document.getElementById("form_busq").submit();
	</script>
	  <?php
	// exit();
}
	if(empty($estado) || $estado =='PTE-ACTIVAR' || $estado == 'BANEADO' ){	
     	if(empty($estado)){
		 $alert_mj = 'ESTADO VACIO Nº'.$num_reg.'\\n SE VA CAMBIAR AL ESTADO ACTIVADO'; 	
		}
	if($estado == 'PTE-ACTIVAR'){ 
	$alert_mj = 'TEAMSPEAK PTE-ACTIVAR Nº'.$num_reg.'\\nSE VA CAMBIAR AL ESTADO ACTIVADO';
	}
	if($estado == 'BANEADO'){ 
	$alert_mj = 'ATENCION USUARIO BANEADO Nº'.$num_reg.'\\nSE VA ELIMINAR ESTADO BANEADO\\nY CAMBIAR A ESTADO ACTIVADO'; }
	echo "<script>alert('$alert_mj');</script>"; 
	$activ_sql_est="UPDATE `usuarios_shr` SET `ESTADO` = 'ACTIVADO' WHERE `usuarios_shr`.`AUTO` ='$busqreg' ";	
		 $stmt = $conn->prepare($activ_sql_est); 
		  $stmt->execute();
	  ?>  
	<script>
		document.getElementById("menu").value= "1" ;
		document.getElementById("breg").value = localStorage.getItem('serverValue'); 
		document.getElementById("form_busq").submit();
	</script>
	  <?php
	}
	}
}
	
		// ESTADO BANEADO

if($_POST['menu'] == 6) {	
if (empty($num_reg)) { 
	echo "<script> alert(' REGISTRO NO EXISTE'); 
			</script>";
		}else{ 
if ($registro == 'PTE-APROBAR'||$registro == 'DENEGADO'||$estado =='PTE-ACTIVAR')   { 
   if (empty($num_reg)) {  
      $alert_mj ="REGISTRO NO EXISTE";  
   }
	
	if($registro == 'DENEGADO'){ 
		$alert_mj = 'ATENCION REGISTRO DENEGADO Nº'.$num_reg.'\\nNO SE PUEDE CAMBIAR ESTADO\\nSIN ESTAR ACEPTADO EL REGISTRO';
	}
	
	if($registro == 'PTE-APROBAR'){ 
		$alert_mj = 'REGISTRO PTE-APROBAR Nº'.$num_reg.'\\nNO SE PUEDE CAMBIAR ESTADO\\nLO ACONSEJABLE ES DENEGAR EL REGISTRO';
	}
	if($estado == 'PTE-ACTIVAR'){ 
	$alert_mj = 'TEAMSPEAK PTE-ACTIVAR Nº'.$num_reg.'\\nNO SE PUEDE CAMBIAR ESTADO\\nSIN ESTAR ACTIVADO LOS PERMISOS\\nTEAMSPEAK';
	}
	
	echo "<script>alert('$alert_mj');</script>";
	 ?>  
	<script>
		document.getElementById("menu").value= "1" ;
		document.getElementById("breg").value = localStorage.getItem('serverValue'); 
		document.getElementById("form_busq").submit();
	</script>
	
	  <?php
	// exit();
}			
//condicion verdadero cambio baneo

if(empty($estado)|| $registro == 'APROBADO'||$estado == 'BANEADO'||$estado =='ACTIVADO'){	
	
	if(empty($estado)){
		 $alert_mj = 'ESTADO VACIO Nº'.$num_reg.'\\nENTRANDO EN EL MENU DE BANEO'; 	
		}
	if ($registro == 'APROBADO'){
	  $alert_mj = 'USUARIO APROBADO Nº'.$num_reg.'\\nENTRANDO EN EL MENU DE BANEO'; 
	}
	if ($estado == 'BANEADO'){
	  $alert_mj = 'USUARIO BANEADO Nº'.$num_reg.'\\nENTRANDO EN EL MENU DE BANEO'; 
   }
	if($estado == 'ACTIVADO'){ 
	$alert_mj = 'TEAMSPEAK ACTIVADO Nº'.$num_reg.'\\nENTRANDO EN EL MENU DE BANEO';
	}	
	
	echo "<script>alert('$alert_mj');</script>"; 				
	
		// ocultar boton y menu
				?>
		<script>
		  $('#div_btb').hide();
	$('#menu option[value=6]').attr({selected: true});	  		  
$('#menu').prop('disabled', true); $('#breg').prop('disabled', true); 
		  </script>
		  <?php
	
//MENSAJE PANTALLA ESTADO BANEADO
 $reg_scr_cons .="<div align='center'>
	<div id='div_ban' class='maninsbox'>				
	    
<div style='margin-bottom:4px;'>
    
<span style='font-size: 16px; background-color:#2a4865;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR  REGISTRO Nº$num_reg</u>&nbsp;</font></span>

    </div>
<span style='font-size: 18px; background-color:#a20d28;'><font color ='#FFFFFF'>&nbsp;BANEAR USUARIO&nbsp;</font></span>								
 <form id='form_ban' action='env_ban.php' method='post'> 
	  
<input type='hidden' id='numreg_b' name='numreg_b' value='$num_reg'>
    
<input type='hidden' name='tlic_b' id='tlic_b' value='$tipo_lic'>

<input type='hidden' id='i_ea_b' name='i_ea_b' value='$ind_ea'>  

<input type='hidden' id='i_cb' name='i_cb_b' value='$ind_cb'>

<input type='hidden' id='i_res_b' name='i_res_b' value='$ind_resc'>

<input type='hidden' id='i_email_b' name='i_email_b' value='$email'>

<div style='margin: 5px 0px 5px 0px; width: 200px;
    border-style: solid;
    border-width: 3px;
    border-color: #ff3400;'>
    
  <input style='margin: 10px 0px 15px 0px;' id='bt_baneo' form='form_ban' type='submit' name='bt_baneo'  value='BANEAR @MAIL' class='btn btn-danger' > 
  <br>
 <input style='margin: 1px 0px 10px 0px;' id='bt_ban_db' form='form_ban' type='submit' name='bt_ban_db'  value='ACTUALIZAR DB' class='btn btn-secondary' >  
 </div>
 
<div style='margin: 8px 0px 5px 0px; width: 200px;
    border-style: solid;
    border-width: 3px;
    border-color: #70ff15;'> 
 <input style='margin: 10px 0px 15px 0px;' id='bt_desb' form='form_ban' type='submit' name='bt_desb'  value='DESBANEAR @' class='btn btn-success' > 
  <br>
 <input style='margin: 1px 0px 10px 0px;' id='bt_desb_db' form='form_ban' type='submit' name='bt_desb_db'  value='ACTUALIZAR DB' class='btn btn-secondary' >  
 </div>
  <span><font color ='#FFFFFF'>Actualizar DB únicamente<br>actualiza la base de datos<br>sin enviar @mail.</span>
 <br>
   	<label class='reglab' for='adm_com_ban'><u>ADMINISTRADOR COMENTARIOS:</u> </label>
		 <br>
	  <textarea id='adm_com_ban' name='adm_com_ban' maxlength='500' cols='30' rows='5' placeholder='En este apartado puedes indicar observaciones o el motivo del baneo del usuario'></textarea>	
<br></form></div></div>";
}
}
}
	// CAMBIO TIPO LICENCIA

if($_POST['menu'] == 7) {	
if (empty($num_reg)) { 
	echo "<script> alert('REGISTRO NO EXISTE'); 
	
			</script>";
		}else{ 
	     
	
	if($_POST['menu_lic'] == 1) {	
		if($tipo_lic == "EA"){echo "<script> alert('NO SE PUEDE CAMBIAR\\nESTADO ACTUAL LICENCIA EA');
			</script>";
			exit();				  
			 }
			 
		// ocultar boton y menu
				?>
		<script>
		    
		  $('#divm_lc').show();  
		  $('#div_btb').hide();
	$('#menu option[value=7]').attr({selected: true});	  		  
	$('#menu_lic option[value=1]').attr({selected: true});
	
$('#menu').prop('disabled', true); 
$('#menu_lic').prop('disabled', true);
$('#breg').prop('disabled', true); 
		  </script>
		  <?php	
		
			if($tipo_lic == "CB"){
			echo "<script> alert('SE VA CAMBIAR EL TIPO\\nLICENCIA CB -> EA\\nREVISE LOS INDICATIVOS');
			</script>";
		
		  
			//MENSAJE PANTALLA CAMBIO TIPO LICENCIA CB-EA 
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:4px;'>
    
<span style='font-size: 16px; background-color:#33573e;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR  REGISTRO Nº$num_reg</u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;CAMBIO LICENCIA CB -> EA&nbsp;</font></span>	
 <br>
  <span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO CB:&nbsp;</font></span>  
		  <br>
		  <span><font color = #f9fc23>$ind_cb</font></span>
	<br>";
		?>	
			 <div align='center'>
	<form method='post' action='mod_lic.php' name='f_tlic_cbea' id='f_tlic_cbea'>
	    <label style ="margin: 6px 0px 6px 0px; padding-right:95px;" for="cb_in"><font color="#5bff15"> NUEVO INDICATIVO CB:</font></label>  
	 	<script> 
		    function copy_indcb(){ document.getElementById('cb_in').value = '<?php echo $ind_cb;?>'}
		   </script>   
	    
		<input style='text-transform:uppercase;' type='text' id='cb_in' name='cb_in'  maxlength='38' placeholder='Nuevo indicativo CB' >
	
	<button type="button" class="btn btn-warning" name="b_copycb" id="b_copycb"  onclick="copy_indcb()">COPY	</button>
		<br>
	<script> 
		    function copy_indea(){ document.getElementById('ea_in').value = '<?php echo $ind_cb;?>'}
		   </script>  
		   		
		<label style ="margin: 6px 0px 6px 0px; padding-right:95px;" for="ea_in"><font color="#5bff15">NUEVO INDICATIVO EA:</font></label>   
		<div>
					<input style='text-transform:uppercase;' type='text' id='ea_in' name='ea_in' maxlength='38' placeholder='Indicativo EA' required >
				
	<button type="button" class="btn btn-warning" name="b_copyea" id="b_copyea" onclick="copy_indea()">COPY</button>
		</div>
	<?php	
	echo " <input type='hidden' id='numreg_mod' name='numreg_mod' value='$num_reg'>
    <input type='hidden' id='i_prov' name='i_prov' value='$provincia'> ";
	?>	
		<br>
		<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_tlic_cbea' class='btn btn-success' id='cbea_mod' name ='cbea_mod' value='MODIFICAR EA'>

		</form>	</div>
	<script>
	 // eliminar espacio en blanco 
		ea_in.addEventListener("keyup",e=>{ let string = e.target.value; 
         e.target.value = string.trim(); 
});  
	    
	</script>

	<?php			
	echo			"</div></div>";
		}						
		
   // CAMBIO RADIOESCUCHA -> EA
		if($tipo_lic == "RADIOESCUCHA"){
			echo "<script> alert('SE VA CAMBIAR EL TIPO\\nLICENCIA RADIOESCUCHA -> EA\\nREVISE LOS INDICATIVOS');
			</script>";		
		//MENSAJE PANTALLA CAMBIO TIPO LICENCIA RADIOESCUCHA-EA 
	
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:4px;'>
    
<span style='font-size: 16px; background-color:#33573e;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR  REGISTRO Nº$num_reg</u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;CAMBIO LICENCIA RADIOESCUCHA -> EA&nbsp;</font></span>	
 <br>	
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO RADIOESCUCHA:&nbsp;</font></span>  
		  <br>
		  <span><font color = #f9fc23>$ind_resc</font></span>
	<br>";
	
		?>	
			 <div align='center'>
	<form method='post' action='mod_lic.php' name='f_tlic_rsea' id='f_tlic_rsea'>
	    <label style ="margin: 6px 0px 6px 0px; padding-right:95px;" for="cb_in"><font color="#5bff15"> NUEVO INDICATIVO EA:</font></label>   
	 	<script> 
		    function copy_indea1(){ document.getElementById('ea_in').value = '<?php echo $ind_resc;?>'}
		   </script>   
	    <div>
		<input style='text-transform:uppercase;' type='text' id='ea_in' name='ea_in'  maxlength='40' placeholder='Nuevo indicativo EA' required >
	</div>
	<button type="button" class="btn btn-warning" name="b_copyrs" id="b_copyrs"  onclick="copy_indea1()">COPY	</button>
		<br>
					
	<?php	
	echo " <input type='hidden' id='numreg_mod' name='numreg_mod' value='$num_reg'>
    <input type='hidden' id='i_prov' name='i_prov' value='$provincia'> ";
	?>	
		<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_tlic_rsea' class='btn btn-success' id='rsea_mod' name ='rsea_mod' value='MOD R_ESCUCHA'>

		</form>	</div>
	<script>
	 // eliminar espacio en blanco 
		ea1_in.addEventListener("keyup",e=>{ let string = e.target.value; 
e.target.value = string.trim(); 
});  
	    
	</script>

	<?php			
	echo			"</div></div>";									
			
		}
			
	 }
	// CAMBIAR LICENCIA CB
	if($_POST['menu_lic'] == 2) {	
		if($tipo_lic == "CB"){echo "<script> alert('NO SE PUEDE CAMBIAR\\nESTADO ACTUAL LICENCIA CB');
			</script>";
				exit();			  
			 }
	
	// ocultar boton y menu
				?>
		<script>
		    
		  $('#divm_lc').show();  
		  $('#div_btb').hide();
	$('#menu option[value=7]').attr({selected: true});	  		  
	$('#menu_lic option[value=2]').attr({selected: true});
	
$('#menu').prop('disabled', true); 
$('#menu_lic').prop('disabled', true);
$('#breg').prop('disabled', true); 
		  </script>
		  
		  <?php	
			if($tipo_lic == "EA"){
			echo "<script> alert('SE VA CAMBIAR EL TIPO\\nLICENCIA EA -> CB\\nREVISE LOS INDICATIVOS');
			</script>";
	
					//MENSAJE PANTALLA CAMBIO TIPO LICENCIA EA-CB
					
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:4px;'>
    
<span style='font-size: 16px; background-color:#33573e;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR  REGISTRO Nº$num_reg</u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;CAMBIO LICENCIA EA -> CB&nbsp;</font></span>	
 <br>
  <span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO EA:&nbsp;</font></span>  
		  <br>
		  <span><font color = #f9fc23>$ind_ea</font></span>
	<br> 	";
  
	if(!empty($ind_cb)){
	echo "
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO CB:&nbsp;</font></span>  
		  <br>
		  <span><font color = #f9fc23>$ind_cb</font></span>
	<br>"; }
	
			?>	
			 <div align='center'>
	<form method='post' action='mod_lic.php' name='f_tlic_cbea2' id='f_tlic_cbea2'>
	    <label style ="margin: 6px 0px 6px 0px;" for="cb_in"><font color="#5bff15"> NUEVO INDICATIVO CB:</font></label>   
	    
	 	<script> 
		    function copy_indeacb(){ document.getElementById('cb_in').value = '<?php echo $ind_ea;?>'}  
	function copy_icb(){ document.getElementById('cb_in').value = '<?php echo $ind_cb;?>'}		        
	  </script>
	  <div>
		<input style='text-transform:uppercase; margin-bottom: 12px;' type='text' id='cb_in' name='cb_in'  maxlength='40' placeholder='Nuevo indicativo CB' required >
	</div>
	<button type="button" class="btn btn-warning" name="b_copyeacb" id="b_copyeacb"  onclick="copy_indeacb()">COPY EA->CB</button>

	
	<?php
	if(!empty($ind_cb)){
		?>
	<button style=" margin-left: 6px;" type="button" class="btn btn-warning" name="b_copycbc" id="b_copycbc"  onclick="copy_icb()">COPY	CB->CB</button>	

	<?php	
	}
	echo "		<br> <input type='hidden' id='numreg_mod' name='numreg_mod' value=$num_reg >
    <input type='hidden' id='i_prov' name='i_prov' value=$provincia > ";
	?>	
		<input style='margin: 12px 0px 6px 0px;' type='submit' form='f_tlic_cbea2' class='btn btn-success' id='camcb_mod' name ='camcb_mod' value='MODIFICACION CB'>
		</form>	</div>
	

	<?php			
	echo			"</div></div>";	

	}
	
	// CAMBIO LICENCIA RADIOESCUCHA -> CB
	if($tipo_lic == "RADIOESCUCHA"){
	echo "<script> alert('SE VA CAMBIAR EL TIPO\\nLICENCIA RADIOESCUCHA -> CB\\nREVISE LOS INDICATIVOS');
			</script>";
			
			//MENSAJE PANTALLA CAMBIO TIPO LICENCIA RADIOESCUCHA -> CB
					
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:4px;'>
    
<span style='font-size: 16px; background-color:#33573e;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR  REGISTRO Nº$num_reg</u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;CAMBIO LICENCIA RADIOESCUCHA -> CB&nbsp;</font></span>	
 <br>
  <span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO RADIOESCUCHA:&nbsp;</font></span>  
		  <br>
		  <span><font color = #f9fc23>$ind_resc</font></span>
	<br> 	";
	
	?>	
			 <div align='center'>
	<form method='post' action='mod_lic.php' name='f_tlic_cbres2' id='f_tlic_cbres2'>
	    <label style ="margin: 6px 0px 6px 0px;" for="cb_in"><font color="#5bff15"> NUEVO INDICATIVO CB:</font></label>   
	    <br>
	 	<script> 
		    function copy_indrescb(){ document.getElementById('cb_in').value = '<?php echo $ind_resc;?>'}  
	</script>
	<div>
			<input style='text-transform:uppercase; margin-bottom: 12px;' type='text' id='cb_in' name='cb_in'  maxlength='40' placeholder='Nuevo indicativo CB' required >
	</div>
	<button type="button" class="btn btn-warning" name="b_copyrescb" id="b_copyrescb"  onclick="copy_indrescb()">COPY RADIOESCUCHA -> CB</button>
	
		<?php	
	echo "		<br> <input type='hidden' id='numreg_mod' name='numreg_mod' value='$num_reg'>
    <input type='hidden' id='i_prov' name='i_prov' value='$provincia'> ";
	?>	
		<input style='margin: 12px 0px 6px 0px;' type='submit' form='f_tlic_cbres2' class='btn btn-success' id='camcb_mod' name ='camcb_mod' value='MODIFICACION CB'>
		</form>	</div>
	<script>

	<?php			
	echo			"</div></div>";
	
	}
	}
		
		// CAMBIAR LICENCIA RADIOESCUCHA
	if($_POST['menu_lic'] == 3) {	
	
		if($tipo_lic == "RADIOESCUCHA"){echo "<script> alert('NO SE PUEDE CAMBIAR\\nESTADO ACTUAL LICENCIA RADIOESCUCHA');
			</script>";
            exit();										
			 }
	
	// ocultar boton y menu
				?>
		<script>
		    
		  $('#divm_lc').show();  
		  $('#div_btb').hide();
	$('#menu option[value=7]').attr({selected: true});	  		  
	$('#menu_lic option[value=3]').attr({selected: true});
	
$('#menu').prop('disabled', true); 
$('#menu_lic').prop('disabled', true);
$('#breg').prop('disabled', true); 
		  </script>
		  
		  <?php	
		
			if($tipo_lic == "EA"){
			echo "<script> alert('SE VA CAMBIAR EL TIPO\\nLICENCIA EA -> RADIOESCUCHA\\nREVISE LOS INDICATIVOS');
			</script>";
			//MENSAJE PANTALLA CAMBIO TIPO LICENCIA EA -> RADIOESCUCHA
	
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:4px;'>
    
<span style='font-size: 16px; background-color:#33573e;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR REGISTRO Nº$num_reg</u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;CAMBIO LICENCIA EA -> RADIOESCUCHA&nbsp;</font></span>	
 <br>	

	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO EA:&nbsp;</font></span>  
		  <br>
		  <span><font color = #f9fc23>$ind_ea</font></span>
	<br> 	";
  
	if(!empty($ind_cb)){
	echo "
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO CB:&nbsp;</font></span>  
		  <br>
		  <span><font color = #f9fc23>$ind_cb</font></span>
	<br>"; }
	
			?>	
			 <div align='center'>
	<form method='post' action='mod_lic.php' name='f_tlic_resc1' id='f_tlic_resc1'>
	    <label style ="margin: 6px 0px 6px 0px;" for="cb_in"><font color="#5bff15"> NUEVO INDICATIVO RESC :</font></label>   
	    
	 	<script> 
		    function copy_eares1(){ document.getElementById('resc_in').value = '<?php echo $ind_ea;?>'}  
	function copy_cbres1(){ document.getElementById('resc_in').value = '<?php echo $ind_cb;?>'}		        
	  </script>
	  <div>
		<input style='text-transform:uppercase; margin-bottom: 12px;' type='text' id='resc_in' name='resc_in'  maxlength='40' placeholder='Nuevo indicativo RESC' required >
	</div>
	<button type="button" class="btn btn-warning" name="b_copyeares" id="b_copyeacb"  onclick="copy_eares1()">COPY EA>RES</button>

	
	<?php
	if(!empty($ind_cb)){
		?>
	<button style=" margin-left: 6px;" type="button" class="btn btn-warning" name="b_copycbres" id="b_copycbres"  onclick="copy_cbres1()">COPY CB>RES</button>	

	<?php	
	}
	echo "		<br> <input type='hidden' id='numreg_mod' name='numreg_mod' value='$num_reg' >
    <input type='hidden' id='i_prov' name='i_prov' value='$provincia'> ";
	?>	
		<input style='margin: 12px 0px 6px 0px;' type='submit' form='f_tlic_resc1' class='btn btn-success' id='camresc_mod' name ='camresc_mod' value='MOD R_ESCUCHA'>
		
		</form>	</div>
	

	<?php			
	echo "</div></div>";	

	}
			
 // CAMBIO CB -> RADIOESCUCHA
		
		if($tipo_lic == "CB"){
			echo "<script> alert('SE VA CAMBIAR EL TIPO\\nLICENCIA CB -> RADIOESCUCHA\\nREVISE LOS INDICATIVOS');
			</script>";		
		//MENSAJE PANTALLA CAMBIO TIPO LICENCIA RADIOESCUCHA-CB 
	
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 16px; background-color:#33573e;'><font color ='#dcbe6e'>&nbsp;<u>ACTUALIZAR REGISTRO Nº$num_reg</u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;CAMBIO LICENCIA RADIOESCUCHA -> CB&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp; INDICATIVO CB:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$ind_cb</font></span>
	<br>";
	
		?>	
			 <div align='center'>
	<form method='post' action='mod_lic.php' name='f_tlic_resc2' id='f_tlic_resc2'>
	    <label style ="margin: 6px 0px 6px 0px;" for="resc_in"><font color="#5bff15">NUEVO IND RADIOESCUCHA:</font></label>   
	 	<script> 
		    function copy_indcbres1(){ document.getElementById('resc_in').value = '<?php echo $ind_cb;?>'}
		   </script>   
	    <div style ="margin-bottom: 8px;">
			
		<input style='text-transform:uppercase;' type='text' id='resc_in' name='resc_in'  maxlength='40' placeholder='Nuevo ind Radioescucha'  required  >
	</div>
		
	<button type="button" class="btn btn-warning" name="b_copyrs" id="b_copyrs"  onclick="copy_indcbres1()">COPY CB->RESC</button>
		<br>
					
	<?php	
	echo " <input type='hidden' id='numreg_mod' name='numreg_mod' value='$num_reg'>
    <input type='hidden' id='i_prov' name='i_prov' value='$provincia'> ";
	?>	
		<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_tlic_resc2' class='btn btn-success' id='camresc_mod' name ='camresc_mod' value='MOD R_ESCUCHA'>

		</form>	</div>
	<script>
	

	<?php			
	echo "</div></div>";									
		}
	}

}
}
			
if($_POST['menu'] == 8) {	
if (empty($num_reg)) { 
	echo "<script> alert('REGISTRO NO EXISTE'); 
		</script>";
		exit();
		}				
		
	if($_POST['menu_indi'] == 1) {	
			
	if(empty($ind_ea)){
	echo "<script> alert('NO SE PUEDE CAMBIAR\\nINDICATIVO EA VACIO');	</script>";
        exit();
			 }
			 // ocultar boton y menu princ
	      ?>   
		<script> 
		  $('#divm_ind').show();  
		  $('#div_btb').hide();
	$('#menu option[value=8]').attr({selected: true});
	$('#menu_indi option[value=1]').attr({selected: true});		
    $('#menu_indi').prop('disabled', true);		
    $('#menu').prop('disabled', true); 
    $('#breg').prop('disabled', true); 
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL INDICATIVO\\n<< EA INDICATIVO >>');
			</script>";		
		//MENSAJE PANTALLA EDIT EA
	
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#C5C5C5;'><font color ='#5A0001'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR INDICATIVO EA&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;INDICATIVO EA:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$ind_ea</font></span>
	<br>";
	
		?>
	      
	
			 <div align='center'>
	<form method='post' action='mod_ind.php' name='f_ed_ea' id='f_ed_ea'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_inea'><font color='#5bff15'>EDITAR INDICATIVO EA:</font></label> 
	<br>
		
			<input style='text-transform:uppercase;' type='text' id='ed_inea' name='ed_inea'  maxlength='40' placeholder='Indicativo EA' required  >
		 <script> 
		      document.getElementById('ed_inea').value = '<?php echo $ind_ea;?>' ;
		   </script>   
		 
	<br>
		    <?php
	                  echo "  
	<input type='hidden' id='i_prov' name='i_prov' value='$provincia'>
	                    <input type='hidden' id='numreg_ed_ind' name='numreg_ed_ind' value='$num_reg'>";
			?>
						
			<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_ed_ea' class='btn btn-success' id='bot_edea' name ='bot_edea' value='EDITAR EA'>
	
		</form></div>
		
			<script>
	 // eliminar espacio en blanco 
ed_inea.addEventListener("keyup",e=>{ let string = e.target.value; 
e.target.value = string.trim(); 
});      
	</script>
		
	<?php
	echo "</div></div>";	
	}
	
	if($_POST['menu_indi'] == 2) {	
		
	if($tipo_lic == 'CB') { 	
	if(empty($ind_cb)){
	echo "<script> alert('NO SE PUEDE CAMBIAR\\nINDICATIVO CB VACIO');	</script>";
        exit();
			 }
	}
	if($tipo_lic == 'EA') { 
		if(empty($ind_cb)){
	  echo "<script> alert('INDICATIVO CB VACIO');</script>";	
		}
	}
		
			 // ocultar boton y menu princ
	      ?>   
		<script> 
		  $('#divm_ind').show();  
		  $('#div_btb').hide();
	$('#menu option[value=8]').attr({selected: true});
	$('#menu_indi option[value=2]').attr({selected: true});		
    $('#menu_indi').prop('disabled', true);		
    $('#menu').prop('disabled', true); 
    $('#breg').prop('disabled', true); 
		  </script>	
	   		  <?php	
	
	echo "<script> alert('SE VA EDITAR EL INDICATIVO\\n<< CB INDICATIVO >>');
			</script>";		
		//MENSAJE PANTALLA EDIT CB
	
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#C5C5C5;'><font color ='#5A0001'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR INDICATIVO CB&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;INDICATIVO CB:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$ind_cb</font></span>
	<br>";
		?>
			 <div align='center'>
	<form method='post' action='mod_ind.php' name='fed_cb' id='fed_cb'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_incb'><font color='#5bff15'>EDITAR INDICATIVO CB:</font></label> 
	<br>
	    	
			<input style='text-transform:uppercase;' type='text' id='ed_incb' name='ed_incb'  maxlength='40' placeholder='Indicativo CB' required  >
		 <script>  document.getElementById('ed_incb').value = '<?php echo $ind_cb;?>' ;</script> 
		    
	<br>
		    <?php
	                  echo "  
                        <input type='hidden' id='i_prov' name='i_prov' value='$provincia'>
	                    <input type='hidden' id='numreg_ed_ind' name='numreg_ed_ind' value='$num_reg'> ";
			?>
			<input style='margin: 8px 0px 6px 0px;' type='submit' form='fed_cb' class='btn btn-success' id='b_edcb' name ='b_edcb' value='EDITAR CB'>
	
		</form></div>
			
	<?php
	echo "</div></div>";									
	
	}
	
if($_POST['menu_indi'] == 3) {	
		
	if(empty($ind_resc)){
	echo "<script> alert('NO SE PUEDE CAMBIAR\\nINDICATIVO RADIOESCUCHA VACIO');</script>";
        exit();
			 }
			 // ocultar boton y menu princ
	      ?>   
		<script> 
		  $('#divm_ind').show();  
		  $('#div_btb').hide();
	$('#menu option[value=8]').attr({selected: true});
	$('#menu_indi option[value=3]').attr({selected: true});		
    $('#menu_indi').prop('disabled', true);		
    $('#menu').prop('disabled', true); 
    $('#breg').prop('disabled', true); 
		  </script>	
	   		  <?php	
	
	echo "<script> alert('SE VA EDITAR EL INDICATIVO\\n<< RADIOESCUCHA INDICATIVO >>');
			</script>";		
		//MENSAJE PANTALLA EDIT RADIOESCUCHA
	
	echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#C5C5C5;'><font color ='#5A0001'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR INDICATIVO RADIOESCUCHA&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;INDICATIVO RADIOESCUCHA:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$ind_resc</font></span>
	<br>";
		?>
			 <div align='center'>
	<form method='post' action='mod_ind.php' name='f_ed_resc' id='f_ed_resc'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_inea'><font color='#5bff15'>EDITAR INDICATIVO RADIOESCUCHA:</font></label> 
	<br>
			<input style='text-transform:uppercase;' type='text' id='ed_inresc' name='ed_inresc'  maxlength='40' placeholder='Indicativo CB' required >
		 <script>  document.getElementById('ed_inresc').value = '<?php echo $ind_resc;?>' ;
		   </script>   
		 
	<br>
		<?php
	                  echo "  <input type='hidden' id='i_prov' name='i_prov' value='$provincia'>
	                    <input type='hidden' id='numreg_ed_ind' name='numreg_ed_ind' value='$num_reg'>";
			?>
			<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_ed_resc' class='btn btn-success' id='bot_edea' name ='bot_edresc' value='EDITAR RADIOESCUCHA'>
	
		</form></div>
		
	<?php
	echo "</div></div>";									
	
	}	
}
	 // EDITAR DATOS PERSONALES 
	 if($_POST['menu'] == 9) {
		 if (empty($num_reg)) { 
	echo "<script> alert('REGISTRO NO EXISTE'); 
		</script>";
		exit();
		}			 	 		 		 
		  ?> 
		<script>
		     $('#divm_dpers').show();   
			$('#div_btb').hide();   
	$('#menu').prop('disabled', true); 
    $('#breg').prop('disabled', true); 
	$('#menu option[value=9]').attr({selected: true});    
    </script>
   <?php 
   
		// EDITAR NOMBRE 
	  if($_POST['menu_pers'] == 1) {   
			 // ocultar boton y menu princ
	       ?>  
		<script> 
	$('#menu_pers option[value=1]').attr({selected: true});		
$('#menu_pers').prop('disabled', true);		
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL CAMPO\\nNOMBRE DEL USUARIO');
			</script>";		
		//MENSAJE PANTALLA EDIT NOMBRE
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR NOMBRE&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;NOMBRE:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$nombre</font></span>
	<br>";  
?>      
	
	<!-- verificar campo input vacio -->
	<script>
		 function vernomb() {
  if ( $("#ed_nomb").val().trim().length > 0 ) {
	  
    document.getElementById("f_ed_nomb").submit();
  }
  else {
    alert("EL CAMPO NOMBRE ESTA VACIO");
	document.getElementById("ed_nomb").focus(); 
  }
}
		</script>		
	
			 <div align='center'>
	<form method='post' action='mod_pers.php' name='f_ed_nomb' id='f_ed_nomb'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_nomb'><font color='#5bff15'>EDITAR NOMBRE:</font></label> 
	<br>
			<input style='text-transform:uppercase;' type='text' id='ed_nomb' name='ed_nomb'  maxlength='40' placeholder='Nombre usuario' required >
		<script> 
		      document.getElementById('ed_nomb').value = '<?php echo $nombre;?>' ;
		  </script> 
		
	<br>
		    <?php       
	              echo "<input type='hidden' id='numreg_ed_pers' name='numreg_ed_pers' value='$num_reg'>";
			?>
	 <input type='hidden' id='ednomb_ctl' name='ednomb_ctl' value='EDNOMB' >		
			
			<input style='margin: 8px 0px 6px 0px;' type='button' class='btn btn-success' name ='bot_ednom' value='EDITAR NOMBRE' onclick='vernomb()'>
	
		</form></div>
		
	<?php
	echo "</div></div>";					  		  
	  }
	  
	  // EDITAR LOCALIDAD
	if($_POST['menu_pers'] == 2) {   
		 // ocultar boton y menu princ
	      ?>   
		<script> 
	$('#menu_pers option[value=2]').attr({selected: true});		
    $('#menu_pers').prop('disabled', true);		
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL CAMPO\\nLOCALIDAD DEL USUARIO');
			</script>";		
		//MENSAJE PANTALLA EDIT LOCALIDAD
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR LOCALIDAD&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;LOCALIDAD:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$localidad</font></span>
	<br>";  
?>      
	
			 <div align='center'>
	<form method='post' action='mod_pers.php' name='f_ed_loca' id='f_ed_loca'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_loca'><font color='#5bff15'>EDITAR LOCALIDAD:</font></label> 
	<br>
		
			<input style='text-transform:uppercase;' type='text' id='ed_loca' name='ed_loca'  maxlength='40' placeholder='Localidad usuario' required >
		 <script> 
		      document.getElementById('ed_loca').value = '<?php echo $localidad;?>' ;
		  </script>   
		 
	<br>
		    <?php
	              echo "<input type='hidden' id='numreg_ed_pers' name='numreg_ed_pers' value='$num_reg'>";
			?>
			<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_ed_loca' class='btn btn-success' id='bot_edloc' name ='bot_edloc' value='EDITAR LOCALIDAD'>
	
		</form></div>
		
	<?php
	echo "</div></div>";					  		  
	  }	 
	  // EDITAR PROVINCIA 
if($_POST['menu_pers'] == 3) { 
			 // ocultar boton y menu princ
	      ?>   
		<script> 
		
	$('#menu_pers option[value=3]').attr({selected: true});		
    $('#menu_pers').prop('disabled', true);		
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL CAMPO\\nPROVINCIA DEL USUARIO');
			</script>";		
		//MENSAJE PANTALLA EDIT PROVINCIA
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR PROVINCIA&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;PROVINCIA:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$provincia</font></span>
	<br>";  
?>      	<!-- verificar campo input vacio -->
	<script>
		 function verprov() {
  if ( $("#ed_prov").val().trim().length > 0 ) {
	  alert("REVISE EL ALIAS SI ES CORRECTO");
    document.getElementById("f_ed_prov").submit();
  }
  else {
    alert("EL CAMPO PROVINCIA ESTA VACIO");
	  document.getElementById("ed_prov").focus();
  }
}
		</script>		
	
			 <div align='center'>
	<form method='post' action='mod_pers.php' name='f_ed_prov' id='f_ed_prov'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_prov'><font color='#5bff15'>EDITAR PROVINCIA:</font></label> 
	<br>
		
			<input style='text-transform:uppercase;' type='text' id='ed_prov' name='ed_prov' maxlength='40' placeholder='Provincia usuario' required >
		 <script> 
		      document.getElementById('ed_prov').value = '<?php echo $provincia;?>' ;
		   </script>   
		 
	<br>
		    <?php
	echo "
<input type='hidden' id='numreg_ed_pers' name='numreg_ed_pers' value='$num_reg' >
	              
	<input type='hidden' id='id_ed_ea' name='id_ed_ea' value='$ind_ea'>
	
<input type='hidden' id='id_ed_cb' name='id_ed_cb' value='$ind_cb'>
<input type='hidden' id='id_ed_resc' name='id_ed_resc' value='$ind_resc'>

<input type='hidden' id='id_ed_lic' name='id_ed_lic' value='$tipo_lic'>";

			?>
		 <input type='hidden' id='edprov_ctl' name='edprov_ctl' value='EDPROV' >				
			
			<input style='margin: 8px 0px 6px 0px;' type='button' class='btn btn-success' name ='bot_edprov' value='EDITAR PROVINCIA' onclick='verprov()'>
	
		</form></div>		
		
	<?php
	echo "</div></div>";					  		  
	  }	 		 
	  // EDITAR PAIS
	  
	 if($_POST['menu_pers'] == 4) {   
		  
			 // ocultar boton y menu princ
	      ?>   
		<script> 
	$('#menu_pers option[value=4]').attr({selected: true});		
    $('#menu_pers').prop('disabled', true);	
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL CAMPO\\nPAIS DEL USUARIO');
			</script>";		
		//MENSAJE PANTALLA EDIT PAIS
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR PAIS&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;PAIS:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$pais</font></span>
	<br>";  
?>      
	
	<!-- verificar campo input vacio -->
	<script>
		 function verpais() {
  if ( $("#ed_pais").val().trim().length > 0 ) {
	  
    document.getElementById("f_ed_pais").submit();
  }
  else {
    alert("EL CAMPO PAIS ESTA VACIO");
  document.getElementById("ed_pais").focus();
	  
  }
}
		</script>		
	
			 <div align='center'>
	<form method='post' action='mod_pers.php' name='f_ed_pais' id='f_ed_pais'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_pais'><font color='#5bff15'>EDITAR PAIS:</font></label> 
	<br>
			<input style='text-transform:uppercase;' type='text' id='ed_pais' name='ed_pais'  maxlength='40' placeholder='Nombre usuario' required >
		<script> 
		      document.getElementById('ed_pais').value = '<?php echo $pais;?>' ;
		  </script> 
		
	<br>
		    <?php
	              echo "<input type='hidden' id='numreg_ed_pers' name='numreg_ed_pers' value='$num_reg'>";
			?>
<input type='hidden' id='edpais_ctl' name='edpais_ctl' value='EDPAIS' >				
			
			<input style='margin: 8px 0px 6px 0px;' type='button' class='btn btn-success' name ='bot_edpais' value='EDITAR PAIS' onclick='verpais()'>
	
		</form></div>
		
	<?php
	echo "</div></div>";					  		  
	  }	 	 
		
		 // EDITAR @EMAIL
if($_POST['menu_pers'] == 5) { 
			 // ocultar boton y menu princ
	      ?>   
		<script> 
	$('#menu_pers option[value=5]').attr({selected: true});		
    $('#menu_pers').prop('disabled', true);		
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL CAMPO\\n@EMAIL DEL USUARIO');
			</script>";		
		//MENSAJE PANTALLA EDIT @EMAIL
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR @EMAIL&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;@EMAIL:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$email</font></span>
	<br>";  
?>      
	<!-- verificar campo input -->
	<script>
		 function vermail() {
		 var in_em = document.getElementById("ed_mail").value ;
		 var or_em = '<?php echo $email;?>' ;
		 if ( or_em == in_em){
		 alert("EL EMAIL ES EL MISMO ");	
		 document.getElementById("ed_mail").focus();
		 }
		 else{
		 
  if ( $("#ed_mail").val().trim().length > 0 ) {
  
  var emailfiltro = document.getElementById("ed_mail");
var valid_email = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;  
  
 if(valid_email.test(emailfiltro.value)){
	document.getElementById("f_ed_mail").submit();
 }
 else {
 alert('FORMATO EMAIL INCORRECTO '); 
 document.getElementById("ed_mail").focus();
 }
  }
  
  else {
    alert("EL CAMPO @EMAIL ESTA VACIO"); 
  document.getElementById("ed_mail").focus();
  }
}
}
		</script>		 
		
			 <div align='center'>
	<form method='post' action='mod_pers.php' name='f_ed_mail' id='f_ed_mail'>
	    
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_mail'><font color='#5bff15'>EDITAR @EMAIL:</font></label> 
	<br>
			<input type='text' style='text-transform:lowercase;'  id='ed_mail' name='ed_mail'  maxlength='40' placeholder='@email usuario' required >
		
		 <script> 
		      document.getElementById('ed_mail').value = '<?php echo $email;?>' ;
		   </script>   
		  
	<br>
		    <?php
	              echo "<input type='hidden' id='numreg_ed_pers' name='numreg_ed_pers' value='$num_reg'>";
	               
			?>
		    <input type='hidden' id='edmail_ctl' name='edmail_ctl' value='EDMAIL' >
		
			<input type='button' style='margin: 8px 0px 6px 0px;' class='btn btn-success' name ='bot_edmail' onclick='vermail()' value='EDITAR @EMAIL'>
	
		</form></div>		
		
	<?php
	echo "</div></div>";					  		  
	  }	 
		  // EDITAR TELEFONO
	if($_POST['menu_pers'] == 6) {   
		 // ocultar boton y menu princ
	      ?>   
		<script> 
	$('#menu_pers option[value=6]').attr({selected: true});		
    $('#menu_pers').prop('disabled', true);		
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL CAMPO\\nTELEFONO DEL USUARIO');
			</script>";		
		//MENSAJE PANTALLA EDIT TELEFONO
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR TELEFONO&nbsp;</font></span>	
 <br>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>&nbsp;TELEFONO:&nbsp;</font></span>  
	</div>	  
		  <span><font color = #f9fc23>$telefono</font></span>
	<br>";  
?>      
	
			 <div align='center'>
	<form method='post' action='mod_pers.php' name='f_ed_telf' id='f_ed_telf'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_telf'><font color='#5bff15'>EDITAR TELEFONO:</font></label> 
	<br>
		
			<input type='number' id='ed_telf' name='ed_telf'  maxlength='40' placeholder='Teléfono usuario' required >
		 <script> 
		      document.getElementById('ed_telf').value = '<?php echo $telefono;?>' ;
		  </script>   
		 
	<br>
		    <?php
	              echo "<input type='hidden' id='numreg_ed_pers' name='numreg_ed_pers' value='$num_reg'>";
			?>
			<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_ed_telf' class='btn btn-success' id='bot_edtelf' name ='bot_edtelf' value='EDITAR TELEFONO'>
		</form></div>
	<?php
	echo "</div></div>";					  		  
	  }	 
	  
		// EDITAR COMENTARIOS
	if($_POST['menu_pers'] == 7) {   
		 // ocultar boton y menu princ
	      ?>   
		<script> 
	$('#menu_pers option[value=7]').attr({selected: true});		
    $('#menu_pers').prop('disabled', true);		
		  </script>	
	   		  <?php	
		
			echo "<script> alert('SE VA EDITAR EL CAMPO\\nCOMENTARIOS DEL USUARIO');
			</script>";		
		//MENSAJE PANTALLA EDIT COMENTARIOS
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>EDITAR REGISTRO Nº$num_reg</b></u>&nbsp;</font></span>
    </div>
 <span style='font-size: 18px; background-color:#3c5b90;'><font color ='#FFFFFF'>&nbsp;EDITAR CONENTARIOS&nbsp;</font></span>	
	<br>";  
?>      
			 <div align='center'>
	<form method='post' action='mod_pers.php' name='f_ed_comen' id='f_ed_comen'>
	    <label style ='margin: 6px 0px 6px 0px;' for='ed_comen'><font color='#5bff15'>EDITAR COMENTARIOS:</font></label> 
	<br>
		 <textarea id="ed_comen" name="ed_comen" maxlength="500" cols="30" rows="5" placeholder="Editar comentarios del usuario"></textarea>	
			
		 <script> 
		      document.getElementById('ed_comen').value = '<?php echo $comentarios;?>' ;
		  </script>   
		 
	<br>
		    <?php
	              echo "<input type='hidden' id='numreg_ed_pers' name='numreg_ed_pers' value='$num_reg'>";
			?>
			<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_ed_comen' class='btn btn-success' id='bot_edcomen' name ='bot_edcomen' value='EDITAR COMENTARIOS'>
	
		</form></div>
		
	<?php
	echo "</div></div>";					  		  
	  }	  
	 }
	  
	 // Email masivo
	 if($_POST['menu'] == 11) {
		 	 	 		 		   
	   ?> 
		<script>	       
			$('#div_btb').hide();   
	$('#menu').prop('disabled', true); 
    $('#breg').prop('disabled', true); 
	$('#menu option[value=11]').attr({selected: true});
	document.querySelector('#b_buscar').textContent = 'ENTRAR';	
    </script>
   <?php 
	  	//PANTALLA CAMPOS MENSAJE EMAIL 
		  
		echo "	
   <div align='center'>
	<div class='maninsbox'>				
	    
<div style='margin-bottom:6px;'>
    
<span style='font-size: 18px; background-color:#271919;'><font color ='#00FF1D'>&nbsp;<u><b>ENVIO MASIVO @MAIL</b></u>&nbsp;</font></span>
    </div>
 <div style='margin-top: 8px;'>
	<span style='background-color:#05093E'><font color = '#FFFFFF'>DATOS EMAIL</font></span>  
	</div>";  
?>      
	
			 <div align='center'>
	<form method='post' action='email_mas_scr.php' name='f_em_mas' id='f_em_mas' >
		
	    <label style ='margin: 6px 0px 6px 0px;' for='em_asunt'><font color='#5bff15'>Asunto email:</font></label> 
	<br>
			<input type='text' id='em_asunt' name='em_asunt'  maxlength='40' placeholder='Asunto email' required >
		 
	<br>
			
	    <label style ='margin: 6px 0px 6px 0px;' for='mens_email'><font color='#5bff15'>Mensaje @mail:</font></label> 
	<br>
		
		 <textarea id="mens_email" name="mens_email" maxlength="500" cols="30" rows="5" placeholder="Mensaje @mail"></textarea>
		 
	<br>  
			
	    <label style ='margin: 6px 0px 6px 0px;' for='file_email'><font color='#5bff15'>Fichero JPG-PNG @mail:</font></label> 
	<div style='margin-bottom: 10px'>
			<input type='text' id='file_email' name='file_email' maxlength='40'>
		</div>
		<a><font color='white'>El fichero tiene que estar ubicado<br> en la carpeta gfx_email del servidor</font></a><br>
			<input style='margin: 8px 0px 6px 0px;' type='submit' form='f_em_mas' class='btn btn-success' id='b_mailmasv' name ='b_mailmasv' value='ENVIAR @MAIL MASIVO'>
		
		</form></div>
	  
	<?php  
	  echo "</div> </div>";
	 } 
	  
// INICIO DIV ESTADO
if(!empty($num_reg)){

$reg_scr_cons .="<div align ='center'>
  
      <div id='div_est' class='boxestad'>
	  <table align='center' width='100%' cellpadding='0' cellspacing='0' border='0'>   
      <tbody>";	  
      
	$reg_scr_cons .= "<tr align='center' > 
   <td style='padding: 12px 0px 15px 0;'><span style=' padding: 8px 8px; font-size: 18px; background-color:#ba0017;'><font color =#f8ff2b>&nbsp;** REGISTRO Nº->$num_reg **&nbsp;</font></span></td></tr>";	   	  
   
if($registro == "PTE-APROBAR"){
$reg_scr_cons .= "<tr align='center'>
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#15a1ff;'><font color =#ffffff>&nbsp;PENDIENTE APROBAR REGISTRO&nbsp;</font></span></td></tr>";    
}

if($registro == "APROBADO"){
$reg_scr_cons .= "<tr align='center' >
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#8A4D00;'><font color =#FFFFFF>&nbsp;REGISTRO APROBADO&nbsp;</font></span></td></tr>";    
}  
if($registro == "DENEGADO"){
$reg_scr_cons .= "<tr align='center' >
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#51170e;'><font color =#ffdd80>&nbsp;USUARIO DENEGADO&nbsp;</font></span></td></tr>";  
	}	
if($estado == "PTE-ACTIVAR"){
$reg_scr_cons .= "<tr align='center'> 
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#1a510e;'><font color =#ffffff>&nbsp;PTE-ACTIVAR TEAMSPEAK&nbsp;</font></span></td></tr>";    
}	  
if($estado == "ACTIVADO"){
$reg_scr_cons .= "<tr align='center'> 
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#1a510e;'><font color =#ffffff>&nbsp;TEAMSPEAK ACTIVADO&nbsp;</font></span></td></tr>"; 
}
if($estado == "BANEADO"){
$reg_scr_cons .= "<tr align='center'>
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#51170e;'><font color =#ffffff>&nbsp;USUARIO BANEADO&nbsp;</font></span></td></tr>";    
}	   
$reg_scr_cons.="</table></div>";


// INICIO DIV INDICATIVO ALIAS

$reg_scr_cons.="
<div id='div_ind' class='boxlinx'>
	  <table align='center' width='100%' cellpadding='0' cellspacing='0' border='0'>   
      <tbody>";	      
if($tipo_lic == "EA"){
$reg_scr_cons .= "<tr align='center' ><td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#336c7b;'><font color =#ffffff>&nbsp;LICENCIA EA&nbsp;</font></span></td></tr>";	
	
	$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp; INDICATIVO EA O EQUIVALENTE:&nbsp;</font></span></td></tr>";
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #f9fc23>$ind_ea</font></span></td></tr>";
	
	if(empty($alias_ea)){
    $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$num_reg-$ind_ea--$provincia</font></span></td></tr>";
	}else{ $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$alias_ea</font></span></td></tr>";
	}

if(!empty($ind_cb)){  
 $reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp; INDICATIVO CB:&nbsp;</font></span></td></tr>";
 	
   $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$ind_cb</font></span></td></tr>";
  
  if(empty($alias_cb)){
  $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$num_reg-CB-$ind_cb--$provincia</font></span></td></tr>"; 
 }else{ $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$alias_cb</font></span></td></tr>";} 
          
}
}

if($tipo_lic == "CB"){

$reg_scr_cons .= "<tr align='center' > 
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#336c7b;'><font color =#ffffff>&nbsp;CB27MHZ&nbsp;</font></span></td></tr>";
$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp; INDICATIVO CB:&nbsp;</font></span></td></tr>";	
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$ind_cb</font></span></td></tr>";
  
 if(empty($alias_cb)){ 
  $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$num_reg-CB-$ind_cb--$provincia</font></span></td></tr>";
 }else{ 
 $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$alias_cb</font></span></td></tr>";} 
  
}
if($tipo_lic == "RADIOESCUCHA"){
$reg_scr_cons .= "<tr align='center'> 
   <td style='padding-bottom: 8px;'><span style='font-size: 18px; background-color:#336c7b;'><font color =#ffffff>&nbsp;RADIOESCUCHA&nbsp;</font></span></td></tr>"; 
$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp; INDICATIVO RADIOESCUCHA:&nbsp;</font></span></td></tr>";	

	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$ind_resc</font></span></td></tr>";
  if(empty($alias_resc)){
  $reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$num_reg-R-$ind_resc--$provincia</font></span></td></tr>";	
	}else{
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'><span><font color = #9aff15>$alias_resc</font></span></td></tr>";}
}	
$reg_scr_cons.="</table>
	</div> </div>";
	}
	// CIERRE DIV ESTADO-INDICATIVO
	
	  // INICIO DIV DATOS GENERALES
	$reg_scr_cons.="<div id='div_gen'>
 <table align='center' width='100%' cellpadding='0' cellspacing='0' border='0' bgcolor='#1F2327'>   
    <tbody>";		
	if(!empty($nombre)){  
$reg_scr_cons.="	 	              	  
<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp;NOMBRE:&nbsp;</font></span></td></tr>";	
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$nombre</font></span></td></tr>";	
}

if(!empty($localidad)){

$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp;LOCALIDAD:&nbsp;</font></span></td></tr>";	
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$localidad</font></span></td></tr>";
}  
if(!empty($provincia)){
$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp;PROVINCIA:&nbsp;</font></span></td></tr>";	
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$provincia</font></span></td></tr>";	
	  }
	 if(!empty($pais)){ 
$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp;PAIS:&nbsp;</font></span></td></tr>";	
$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
 <span><font color = #f9fc23>$pais</font></span></td></tr>";
	  }
	  if(!empty($email)){
$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp;EMAIL:&nbsp;</font></span></td></tr>";	
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$email</font></span></td></tr>";
}
if(!empty($telefono)){
$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp;TELEFONO:&nbsp;</font></span></td></tr>";	
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$telefono</font></span></td></tr>";
}
if(!empty($comentarios)){
$reg_scr_cons .= "<tr align='center'><td style='padding-bottom: 8px;'><span style='background-color:#05093E'><font color = #FFFFFF>&nbsp; COMENTARIOS:&nbsp;</font></span></td></tr>";	
	$reg_scr_cons .="<tr align='center'><td style='padding-bottom: 8px'>
  <span><font color = #f9fc23>$comentarios</font></span></td></tr>";	  
}
	$reg_scr_cons .= "
	</table>
	</div>
	</body>
	</html>";	  
	
	print_r($reg_scr_cons);
	
 	 
	 // mysql_free_result($result); 		
		
	   // }			
    } 	
  
?>
       
<!-- FIN PHP -->

<!-- fin texto protegido html --> 	
</body>
</html>
