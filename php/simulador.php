<html lang="es">
<head>
 <!--Pagina Web creada EMPC Copyright (c) 2024, Radioenlace VHF.-->
<meta charset="utf-8">
	<title>SIMULADOR PERFIL</title>
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
    <a class="navbar-brand" href="#" style="color: #ffc880;"><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham" ><use href="../gfx/menuico.svg#flecha"></use> </svg>SIMULADOR PERFIL</a>
    	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
        
      <li class="nav-item"><a class="nav-link" href="../index.html"><svg viewBox="0 0 576 576" Fill="#868686" class="menuicosvg"> <use href="../gfx/menuico.svg#homeico"></use></svg>INICIO</a> </li>
 <li class="nav-item"> <a class="nav-link" href="../radioenlace.html"> <svg viewBox="0 0 24 24" Fill="#868686" class="icoradio"> <use href="../gfx/menuico.svg#radioenlico"></use></svg>RADIOENLACE</a> </li>
		
       	<li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 24 24" fill="#00ff2d" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg>TEAMSPEAK</a>
		  
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
	  <li class="nav-item"> <a class="nav-link" href="../qsomos.html"><svg viewBox="0 0 256 256" Fill="#868686" class="icoabout"> <use href="../gfx/menuico.svg#qsomosico"></use></svg>ABOUT</a></li>  
	</ul>  
	  
	</div>	  
</nav>	
	
<!-- fin menu -->

<?php
setlocale(LC_ALL, 'es_ES');	
// RECUPERAR ID URL Y ALMACENAR VARIABLE	
$nume_simu = $_GET["id_url"];
	
	// llamada conexion
	require_once('conexion.php');
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
	
	 if(!empty($_GET))
   {
	  $busqreg = $_POST['breg'];	      
      $sql ="SELECT * FROM usuarios_shr WHERE AUTO ='$nume_simu' LIMIT 1";
      $result = $conn->query($sql);
// RESULTADO BUSQUEDA 	  
  while($mostrar=mysqli_fetch_array($result)){   
$al_sim_ea = $mostrar['ALIAS_EA'];
$al_sim_cb = $mostrar['ALIAS_CB']; 
$al_sim_resc = $mostrar['ALIAS_RESC'];
}


// Pantalla general visualizacion
 $simul .="
   <div align='center' style='margin-top: 10px;'> 
   <span style='background-color:#7B1F1F; font-size:20px; width: 275px;'><font color='#FFFFFF' >&nbsp;<u>SIMULADOR PERFIL</u>&nbsp;</font><span><br>
   
   <p><font color = #74e8e8>&nbsp;TEAMSPEAK&nbsp;</font></p>
 
 <hr style='margin: -8px 0px 8px 0px ;width : 300px; height: 3px; background-color: white;' >  
 
</div>";
 // Formulario EA y Botones
 
	if(!empty($al_sim_ea)){ 
		
	$simul .="    
		 <div align='center'>  
		 <p style='margin-bottom: -10px'><font color = '#E8A674'>EA O EQUIVALENTE</font></p>
 
		<!-- Android form-->
		<form action='../simulador/android.php' name='form_ea_and' id='form_ea_and' method='post'> 
	
	<input type='hidden' id='simu_alea' name='simu_alea' value=$al_sim_ea >  
    <input type='hidden' id='simulic' name='simulic' value='ea'>
    
		</form>
<!-- Windows form-->
		<form action='../simulador/win.php' name='form_ea_win' id='form_ea_win' method='post'>
	
	<input type='hidden' id='simu_alea_win' name='simu_alea_win' value=$al_sim_ea>
	<input type='hidden' id='simulic' name='simulic' value='ea'>
		</form>
	<!-- boton android-->	
	<button type='submit' value ='bot_ea_and' form='form_ea_and' name='ea_andro' class='btn btn-success'>&nbsp;ANDROID&nbsp;</button>
	<!-- boton Windows -->
		<button form='form_ea_win' type='submit' style='margin-left: 8px;' name='bt_ea_win' value ='bot_ea_win' class='btn btn-primary'>WINDOWS</button>		
		
	<hr style=' margin-bottom: 8px; width: 300px; height: 3px; background-color:#f8ff00;' >
	</div>";
		 }
		 
		// Formulario CB y Botones
		
	if(!empty($al_sim_cb)){  
	$simul .="
		 <div align='center'>  
		 <p style='margin-bottom: -10px'><font color = '#E8A674'>CB 27MHZ</font></p>
		 <!-- Android form -->
		<form action='../simulador/android.php' name='form_cb_and' id='form_cb_and' method='post'> 
	
	<input type='hidden' id='simu_alcb' name='simu_alcb' value='$al_sim_cb'>  
	
    <input type='hidden' id='simulic' name='simulic' value='cb'>
	
	</form>	    
	<!-- Win form -->
	<form action='../simulador/win.php' name='form_win_cb' id='form_win_cb' method='post'> 
	
	<input type='hidden' id='simu_alcb_win' name='simu_alcb_win' value='$al_sim_cb'>  
	
    <input type='hidden' id='simulic' name='simulic' value='cb'>
	
	</form>	    
	<!-- botones cb -->
	<button form='form_cb_and' type='submit' value ='bot_cb_and' name='cb_andro' class='btn btn-success'>&nbsp;ANDROID&nbsp;</button>
	
	<button form='form_win_cb' type='submit' style='margin-left: 8px;' name='bot_cb_win' value ='bot_cb_win'  class='btn btn-primary'>WINDOWS</button>
	
	<hr style= 'width : 300px; height: 3px; background-color:#f8ff00;' >
		 </div>";

 }	 
		 // Formulario radioescucha
		 
	if(!empty($al_sim_resc)){ 	$simul .="
		 <div align='center'>  
		 <p style='margin-bottom: -10px'><font color = '#E8A674'>RADIOESCUCHA</font></p>
		 <!-- android form -->
			<form action='../simulador/android.php' name='form_resc' id='form_resc' method='post'> 
	
	<input type='hidden' id='simu_alresc' name='simu_alresc' value='$al_sim_resc'>  
	
    <input type='hidden' id='simulic' name='simulic' value='resc'>
	</form>	     
	<!-- windows form -->
	
		<form action='../simulador/win.php' name='form_win_resc' id='form_win_resc' method='post'> 
	
	<input type='hidden' id='simu_alresc_win' name='simu_alresc_win' value='$al_sim_resc'>  
	
    <input type='hidden' id='simulic' name='simulic' value='resc'>
	</form>	    
	
	<!-- botones radioescucha -->
		<button form='form_resc' type='submit' value ='bot_resc_and' name='resc_andro' class='btn btn-success'>&nbsp;ANDROID&nbsp;</button>
	
	<button form='form_win_resc' type='submit' style='margin-left: 8px;' name='resc_win' value ='bot_resc_win'  class='btn btn-primary'>WINDOWS</button>
	
	<hr style= 'width : 300px; height: 3px; background-color:#f8ff00;' >
		 </div> 	 
		";
	}	 
	$simul .="<div align='center'>
		<h4><font color='#a5ff80'>INFORMACIÓN</font></h4> 
		<p style ='width:280px;'><font color='#ffdfaa'>Teamspeak soporta múltiples perfiles en su configuración, puedes crear un perfil para la sala VHF y otro para la sala CB.</font></p>
		</div>";
	
	
	  $simul .="</body></html>";
	  print_r ($simul);
	 }
 
?>
</body>
	
<footer>
	  <a href="qsomos.html" style="color:#ff8800">EA7BEG - EA7KPT</a><br>
	 <p>© 2024 EB7EIB</p>
	</footer>	
</html>
	
	
