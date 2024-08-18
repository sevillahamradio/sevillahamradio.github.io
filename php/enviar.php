<?php

// Construcción del mensaje del email

    $email_message = "Detalles del formulario de registro:\n\n";

    $email_message .= "Indicativo: " .  utf8_decode($_POST['INDICATIVO']) . "\n";

    $email_message .= "Nombre: " .  utf8_decode($_POST['NOMBRE']) . "\n";
	
    $email_message .= "Localidad: " .  utf8_decode($_POST['LOCALIDAD']) . "\n";
	
    $email_message .= "Provincia: " .  utf8_decode($_POST['PROVINCIA']) . "\n";

    $email_message .= "Pais: " .  utf8_decode($_POST['PAIS']) . "\n";

    $email_message .= "E-mail: " . $_POST['email'] . "\n";

    $email_message .= "Comentarios: " . utf8_decode($_POST['comments']) . "\n";

    $asunto = 'Formulario Registro';


// Construcción del mensaje del email usuario

    $asunto1 = 'Registro enviado SevillaHamRadio';
    $email_message1 .=  utf8_decode("Su solicitud esta en proceso ". $_POST['INDICATIVO']) . "\n\n";
    $email_message1 .=  utf8_decode("Periodo comprobacíon 48 horas aproximadamente."). "\n";
    $email_message1 .=  utf8_decode("Recibira por email los datos de conexión y el alias."). "\n"; 
	$email_message1 .=  utf8_decode("No responda a este mensaje, es un envío automático.")	. "\n";
		

		
 
	if(mail('ea7beg@gmail.com,ea7kpt@gmail.com,emipc@yahoo.com,', $asunto, $email_message)){
		
				
		echo "<p><font color=#D80003> <font size=40px> <center> ** REGISTRO ENVIADO **<br />** SEVILLAHAMRADIO**<br />CONSULTE SU CORREO<br />SI NO APARECE NINGUN EMAIL<br />CONSULTE BANDEJA SPAM </center></p>";

				mail($_POST['email'], $asunto1, $email_message1);
	}
 ?>