<?php
session_start();
include("check.php"); 
?>

<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">   

</head>       
    
<body>
	
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
 $env_as = $_POST['in_as'];
 $env_mens = $_POST['in_mens'];
 $env_fil = $_POST['in_img'];	
	$file_mem = 'https://sevillahamradio.com/gfx_email/'.$env_fil;
	
	if (!empty($env_as)){

$mail_env ="<html><body style=' background-color:#480606;'>
 <div align='center'>
		
<table align='center' width='100%' cellpadding='0' cellspacing='0' border='0' style=' background-color:#480606'>
	<tbody>
	<tr align='center'>
	<td style='padding-top:10px;'><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";
	
$mail_env .="
<tr align='center'> 
<td style='padding: 8px 0px 20px 0;'>
<a href='https://sevillahamradio.com/' title='sevillahamradio'><font style='background-color:#2c2828' color ='#aaffca'>** SEVILLAHAMRADIO.COM **</font></td></tr>";

$mail_env .="
<tr align='center'>
    <td style='padding-bottom: 20px;'>
   <div style='width:300px;'> 
        <span>
<font color = '#E0EFA1'>$env_mens</font></span>
</div></td></tr>";

// Cargar imagen
if(!empty($env_fil)){
$mail_env .="
<tr align='center'>
    <td style='padding-bottom: 20px;'>
   <img src= '$file_mem' alt='Pulsar para ver imagen' width='300px'>
</div></td></tr>";
}
$mail_env .="
<tr align='center'>
<td style='padding-bottom: 10px;'>
    
<div style='width: 300px; color: #95e0ff; border-style: solid; padding: 8px 0px 8px 0px;'>
    
<a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'><font color='#00E3FF'>SEVILLAHAMRADIO@GMAIL.COM</font></a>
<span style='font-size: 20px;'><font color='#ffd295'>Administrador. Un saludo 73.</font></span>
</div>
</td></tr>";	

$mail_env .="</table></div></body></html>";

print_r($mail_env);
	
	$cabeceras = 'From: notificaciones@sevillahamradio.com' . "\r\n" .
	         'Content-type: text/html; charset=UTF-8' . "\r\n" .
	         'X-Mailer: PHP/' . phpversion();    
	   
	// busqueda sql   
	$sql ="SELECT * FROM usuarios_shr";
        $result = $conn->query($sql);
$email_env = '';
// RESULTADO BUSQUEDA 	  
while($busq = mysqli_fetch_array($result)){

$email_env = $busq['EMAIL'];

	if(mail($email_env, $env_as, $mail_env, $cabeceras)){$ok_env = 'OK';}
	else {$ok_env = 'NO_OK';}
	}
if ($ok_env=='OK'){
	
	echo "<div align='center'>
	
	<h4><font color='#85c88e'><<< @EMAIL ENVIADO >>></font></h6>
	</div>";
	
}	
	
if ($ok_env=='NO_OK'){		
echo "<div align='center'>
	<h4><font color='#85c88e'><<< EMAIL NO ENVIADO >>></font><br>  >>>> ERROR <<<<</h6>
	</div> ";		
}
	echo "<div align='center' style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div>	
	 ";
	}

?>

</body>
</html>	
