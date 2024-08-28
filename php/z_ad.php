<!DOCTYPE html>
<html lang="es">
<head>
<!--Pagina Web creada EMILIO EB7EIB Copyright (c) 2024, Radioenlace VHF-->    
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
<center><img src="../gfx/banner.png" alt="Banner SevillaHamRadio" width="750" height="150" class="img-fluid"></center>
	<!-- MENU PRINCIPAL -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="color:#ffc880;" ><svg viewBox="0 0 64 64" fill="#15BB2D" class="flecham"><use href="../gfx/menuico.svg#flecha"></use> </svg>ZONA PRIVADA</a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
        
      <li class="nav-item"> <a class="nav-link" href="../index.html"> <svg viewBox="0 0 576 576" Fill="#868686" class="menuicosvg"> <use href="../gfx/menuico.svg#homeico"></use></svg>INICIO</a> </li>
		
      <li class="nav-item"> <a class="nav-link" href="../radioenlace.html"> <svg viewBox="0 0 24 24" Fill="#868686" class="icoradio"> <use href="../gfx/menuico.svg#radioenlico"></use></svg>RADIOENLACE</a> </li>
		
	  	<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg viewBox="0 0 576 576" fill="#868686" class="icoteam"> <use href="../gfx/menuico.svg#teamico"></use></svg>TEAMSPEAK</a>
			
       <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
			<a class="dropdown-item" href="../teamspeak.html"><b>INICIO TEAMSPEAK </b></a>	
			<a class="dropdown-item" href="../users_team.html"><b>LISTA USUARIOS</b></a> 
			<a class="dropdown-item active"><b>REGISTRO USUARIO</b></a>
			
		     <div class="dropdown-divider"></div> 
			<a class="dropdown-item" href="../man_team_android.html"><b>MANUAL ANDROID</b></a>
			<a class="dropdown-item" href="../man_team_win.html"><b>MANUAL WINDOWS</b></a>
            			
		    </div>			
       </li>
		
	
	  	  <li class="nav-item"> <a class="nav-link" href="../eventos.html"><svg viewBox="0 0 452.986 452.986" Fill="#868686" class="icoevent"> <use href="../gfx/menuico.svg#eventico"></use></svg>EVENTOS</a></li>
	 <!--  
	<li class="nav-item"> <a class="nav-link" href="merca.html"><svg viewBox="0 0 512 512" Fill="#868686" class="icomerca"> <use href="gfx/menuico.svg#mercaico"></use></svg>MERCARADIO</a></li>  
	--> 
	  <li class="nav-item active"> <a class="nav-link" href="../qsomos.html"><svg viewBox="0 0 256 256" Fill="#00ff2d" class="icoabout"> <use href="../gfx/menuico.svg#qsomosico"></use></svg>QUIÉNES SOMOS</a></li>  
	</ul>  
 </div>
  </nav>	
<br>
<!-- FIN MENU PRINCIPAL -->	
<!-- Inicio login -->	
<?php 
session_start();
$password = "c30f2bcf7d745f7615d4bcf1e9b2487e";
if($_POST['password']){
    if(md5($_POST['password']) == $password){
        $_SESSION['password'] = "alm";
    }else{
        echo "<span style='color:red;font-weight:bold;'>La contraseña es incorrecta</span>";
    }}
if(!$_SESSION['password']){
?>
<h2 style="color:#FFFD00">&nbsp;Logueate</h2>
	<p style="color:#FFFD00; font-size: 19px;">&nbsp;Esta p&#225;gina tiene restringido el acceso</p>
<form style="margin:12px;" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="password" name="password">
<input type="submit" name="Submit" value="Login!"></form>
<?php 
}else{
    if($_GET['desconectar']){
        session_destroy();
        exit("<span style='color:green;'>Haz sido desconectado correctamente</span>");
    }
?>	

<!-- inicio codigo protegido html -->
  
	  <center>
  <div style="max-width: 300px; color:#05E3FF">
		
	<h4>REGISTRO USUARIO TEAMSPEAK RADIOENLACE</h4>
		<h4>ZONA ADMINISTRADOR</h4>
  </div>
		<br>		
  <form action="enviar_est.php" method="POST" >
    <div class="form-group">
	 <label class="reglab" for="INDICATIVO">INDICATIVO: <a style="color :#9DF5F9">(*)</a></label>
	  <input name="INDICATIVO" type="text" required id="INDICATIVO" maxlength="10" placeholder="Indicativo">
	  </div>
	<div style="max-width:  width: 300px; color: #1AFF00">
	  <p> Cuando es un RADIOESCUCHA poner el nombre del usuario en la casilla de indicativo.</p>
	  </div>
	 	
    <div class="form-group"> 
    <label class="reglab" for="email">EMAIL:---&gt;&nbsp; <a style="color :#9DF5F9">(*) &nbsp;</a></label>
    <input name="email" type="email" required id="email" maxlength="50" placeholder="Email@">
	  </div>  
	     	
	    	     	 <div class="form-group ocultar">
    <label class="reglab" for="ALIAS">ALIAS: -----<a style="color :#9DF5F9"> &gt;&nbsp; &nbsp; </a></label>
	
    <input name="ALIAS" type="text" id="ALIAS" maxlength="50" placeholder="XX-EA7XXX--XXXXXXXX" >
    
	  </div>
	  <div class="ocultar" style="max-width: 300px; text-align: left">
		   <li>
		  Alias XX-EAXXX--PROVINCIA  
		  </li>
		  <li>
		  Alias XX-R-ESCUCHA--PROVINCIA 
		  </li>
		  <br>
    </div>  
	  
	  <div>
		  <label  class="reglab" for="ESTADO">ESTADO: <a style="color :#9DF5F9">(*)</a></label>

<select name="ESTADO" required id="ESTADO">
  <option value="1">APROBADO</option>
  <option value="2">DENEGADO</option>
  <option value="3">REG. ACT. PROX. FINALIZACION</option>
  <option value="4">REG. ACT. PERIODO AGOTADO</option>	
  <option value="5">BANEADO</option>
</select>
	</div> 
	  
    <label class="reglab" for="comments">COMENTARIOS: </label>
		 <br>
	  <textarea name="comments" maxlength="500" cols="30" rows="5" placeholder="Comentarios"></textarea>	
		 	  
<div style="max-width: 300px">
		 <br>
	     <input style="background-color: #FF9900; padding:28px;" type="submit">
		 <br>
		 <br>
		 <input style="color: #FF0000; padding:8px;" type="reset" name="reset" id="reset" value="Restablecer">
	</div>    
		 
 </form>
		<br>	
  
	<p> TODOS LOS CAMPOS <a style="color :#9DF5F9">(*)</a> SON OBLIGATORIOS.</p>
  
	<!-- Script ocultar -->
	<script type="text/javascript">
		$('#ESTADO').on('change',function(){
        var selectValor = $(this).val();
        //alert (selectValor);

        if (selectValor == '1') {
			$('.ocultar').show();
			
        }else {
			$('.ocultar').hide();
            //alert('esta es la opcion 2')
        }
    });	
		</script>
		  
	<!-- CODIGO DESCONECTAR SECCION -->
		 
<a style="font-size: 18px" href="<?php echo $_SERVER['PHP_SELF']; ?>?desconectar=si">DESCONECTAR</a>
		  
		  <!-- -->
	</center>
</body>
<!-- fin texto protegido html --> 	
<!--php-->
<?php 	
}
?>
<!-- FIN PHP -->
	<br>
<footer>
	  <a href="../qsomos.html" style="color:#ff8800">EA7BEG - EA7KPT</a><br>
	 <p>© 2024 Emilio EB7EIB</p>
	</footer>	
</html>	
	