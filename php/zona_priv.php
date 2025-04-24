<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--Pagina Web creada EMPC Copyright (c) 2024, Radioenlace VHF-->    
	<meta charset="utf-8">
	<title>ZONA PRIVADADA</title>
		<!-- Iconos favicon pestaña-->

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" sizes="16x16 32x32 48x48">
<link rel="apple-touch-icon" sizes="57x57" href="/gfxfavicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/gfxfavicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/gfxfavicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/gfxfavicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/gfxfavicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/gfxfavicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/gfxfavicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/gfxfavicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/gfxfavicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/gfxfavicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/gfxfavicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/gfxfavicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/gfxfavicon/favicon-16x16.png">
<link rel="mask-icon" href="/gfxfavicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="manifest" href="/js/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/gfxfavicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

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
    <a class="navbar-brand" href="#" style="color:#ffc880;" ><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham"><use href="../gfx/menuico.svg#flecha"></use> </svg>PASSWORD</a>
    
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
<!-- Inicio login -->	

<?php  

if(!isset($_SESSION['claveint']))
$_SESSION['claveint'] = 0;
else
if($_SESSION['claveint'] >= 4)
{echo '<div align="center">

<h4 style="color:#ff2b4a">Limite de intentos superado<br>PAGINA BLOQUEADA</h4></div>';
exit();
}

$password = "c30f2bcf7d745f7615d4bcf1e9b2487e";
$password1 = "0004d0b59e19461ff126e3a08a814c33";	
if($_POST['password']){
    if(md5($_POST['password']) == $password || md5($_POST['password']) == $password1 ){
        $_SESSION['password'] = "alm";
		
    }else{
    
    $_SESSION['claveint'] += 1;
    $intnum = $_SESSION['claveint'];
        echo "<div align='center'> 
            
<span  style='color:red;font-weight:bold;'><< La contraseña es incorrecta >><br>ADVERTENCIA INTENTO N° $intnum <br>MAX 4 INTENTOS</span></div>";
 
         
    }}
if(!$_SESSION['password']){

?>
<div align="center">
<h2 style="color:#FFFD00">&nbsp;Logueate</h2>

	<p  style="color:#FFFD00; font-size: 16px;">&nbsp;Esta p&#225;gina tiene restringido el acceso</p>
<form style="margin:12px;" name="formpass" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="password" name="password">
<input type="submit" name="Submit" value="Login!"></form>
</div>

<?php 
}else{
    if($_GET['desconectar']){
        session_destroy();
        exit("<span style='color:green;'>Haz sido desconectado correctamente</span>");
   
    }
    echo '
 <script>document.location.href = "zpmen.php"</script>';

}
?>	

<!-- inicio codigo protegido html -->

	
<!--  <div align="center">
 <a style="font-size: 18px" href="<?php // echo $_SERVER['PHP_SELF']; ?>?desconectar=si">DESCONECTAR</a>
 </div>
 -->

<!-- fin texto protegido html --> 	
</body>
</html>
