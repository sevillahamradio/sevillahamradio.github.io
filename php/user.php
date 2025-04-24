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
    <a class="navbar-brand" href="#" style="color: #ffc880;"><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham" ><use href="../gfx/menuico.svg#flecha"></use> </svg>LISTA USUARIOS</a>
    	
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

	
// llamada conexion
	require_once('conexion.php');
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}		

$sql_lisreg = "SELECT * FROM usuarios_shr"; 	 				
	
echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Nº_REG</font> </td> 
          <td> <font face="Arial">IND_EA</font> </td> 
          <td> <font face="Arial">IND_CB</font> </td> 
          <td> <font face="Arial">IND_RESC</font> </td> 
          <td> <font face="Arial">TIPO_LIC</font> </td> 
		  <td> <font face="Arial">REGISTRO</font> </td> 
          <td> <font face="Arial">ESTADO</font> </td> 
          <td> <font face="Arial">NOMBRE</font> </td> 
          <td> <font face="Arial">LOCALIDAD</font> </td> 
          <td> <font face="Arial">PROVINCIA</font> </td>
		  <td> <font face="Arial">PAIS</font> </td> 
          <td> <font face="Arial">EMAIL</font> </td> 
          <td> <font face="Arial">TELEFONO</font> </td> 
          <td> <font face="Arial">COMENTARIOS</font> </td> 
          <td> <font face="Arial">ALIAS_EA</font> </td>
		  <td> <font face="Arial">ALIAS_CB</font> </td> 
          <td> <font face="Arial">ALIAS_RESC</font> </td>
      </tr>';

 if ($result = $conn->query($sql_lisreg)) {
	 
    while ($row = $result->fetch_assoc()) {
        $field1name = $row['AUTO'];
        $field2name = $row["IND_EA"];
        $field3name = $row["IND_CB"];
        $field4name = $row["IND_RESC"];
        $field5name = $row["TIPO_LIC"]; 
        $field6name = $row["REGISTRO"];
        $field7name = $row["ESTADO"];
        $field8name = $row["NOMBRE"];
        $field9name = $row["LOCALIDAD"];
        $field10name = $row["PROVINCIA"]; 
		$field11name = $row["PAIS"];
        $field12name = $row["EMAIL"];
        $field13name = $row["TELEFONO"];
        $field14name = $row["COMENTARIOS"];
        $field15name = $row["ALIAS_EA"]; 
		$field16name = $row["ALIAS_CB"];
        $field17name = $row["ALIAS_RESC"];
		
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td> 
				  <td>'.$field11name.'</td> 
                  <td>'.$field12name.'</td> 
                  <td>'.$field13name.'</td> 
                  <td>'.$field14name.'</td> 
                  <td>'.$field15name.'</td> 
				  <td>'.$field16name.'</td> 
                  <td>'.$field17name.'</td> 
				  			  
              </tr>';
	}
	  $result->free();
	}
?>
</body>
</html>		
	
