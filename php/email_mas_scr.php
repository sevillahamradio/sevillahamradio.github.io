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
	
 $em_as = $_POST['em_asunt'];
 $em_mens = $_POST['mens_email'];
 $b_imas = $_POST['b_mailmasv'];		
 $fil_mail = $_POST['file_email'];	
 $file_m = 'https://sevillahamradio.com/gfx_email/'.$fil_mail;
	
if ($b_imas == "ENVIAR @MAIL MASIVO"){

$mail_p ="<html><body style=' background-color:#480606'>
 <div align='center'style=' background-color:#480606'>
		
<table align='center' width='100%' cellpadding='0' cellspacing='0' border='0'>
	<tbody>
	<tr align='center'>
	<td><img src='https://sevillahamradio.com/gfx/logo_email.png' alt='Banner SevillaHamRadio' width='240'><br></td></tr>";
	
	$mail_p .="
<tr align='center'> 
<td style='padding: 8px 0px 20px 0;'>
<a href='https://sevillahamradio.com/' title='sevillahamradio'><font style='background-color:#2c2828' color ='#aaffca'>** SEVILLAHAMRADIO.COM **</font></td></tr>";

$mail_p .="
<tr align='center' >
    <td style='padding-bottom: 20px;'>
   <div style='width:300px;'> 
    <span><font color ='#E0EFA1'>$em_mens</font></span>
</div></td></tr>";

// Cargar imagen
if(!empty($fil_mail)){
	$mail_p .="
<tr align='center'>
    <td style='padding-bottom: 20px;'>
	
   <img src='$file_m' width='300px'>
</div></td></tr>";
}
$mail_p .="
<tr align='center'>
<td style='padding-bottom: 10px;'>
    
<div style='width: 300px; color: #95e0ff; border-style: solid; padding: 8px 0px 8px 0px;'>
    
<a href='mailto:sevillahamradio@gmail.com' target='_blank' title='sevillahamradio'><font color='#00E3FF'>SEVILLAHAMRADIO@GMAIL.COM</font></a>
<span style='font-size: 20px;'><font color='#ffd295'>Administrador. Un saludo 73.</font></span>
</div>
</td></tr>";	
	
$mail_p .="</table></div></body></html>";

	print_r($mail_p);
	
}

echo "
	<div align='center'>
	 <form method='post' action='email_mas_env.php' name='f_em_env' id='f_em_env'>   
	 <input type='hidden' id='in_as' name='in_as' value='$em_as'> 
	  <input type='hidden' id='in_mens' name='in_mens' value='$em_mens'>
	   <input type='hidden' id='in_img' name='in_img' value='$fil_mail'>
	 
	 <input alt='Submit' id='bot_mav' name='bot_mav' type='image' src='../gfx_email/email_mas.png' width='100px' height='100px'>
	 </form>
	</div>";
echo "<div align='center' style='margin: 10px 0px 10px 0px;'>
	<input type='image' src='../gfx/boton_at.png' width='150' onclick=\"document.location.href='zpmen.php'\"> 
	</div>	
	 ";			
?>					   
																				   
	
</body>
</html>	
