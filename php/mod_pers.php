<?php
session_start();
include("check.php"); 
?>
<!DOCTYPE html>
<html>
<body>
<?php	
setlocale(LC_ALL, 'es_ES');

if(empty($_POST['numreg_ed_pers'])){echo "
<script> alert('ERROR EN EL REGISTRAR\\nNUMERO VACIO'); 
document.location.href='zpmen.php';</script>";
	 }
	
// llamada conexion
	require_once('conexion.php');
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
$id_num_reg = $_POST['numreg_ed_pers'];
$id_nomb = mb_strtoupper($_POST['ed_nomb'],'UTF-8');
$crt_nomb = $_POST['ednomb_ctl'];
$id_loca = mb_strtoupper($_POST['ed_loca'],'UTF-8');
$bot_loca = $_POST['bot_edloc'];
$id_prov = mb_strtoupper($_POST['ed_prov'],'UTF-8');
$crt_prov = $_POST['edprov_ctl'];
$id_pais = mb_strtoupper($_POST['ed_pais'],'UTF-8');
$crt_pais = $_POST['edpais_ctl'];
$id_mail = mb_strtolower($_POST['ed_mail']);
$crt_mail = $_POST['edmail_ctl'];
$id_telf = $_POST['ed_telf'];
$bot_telf = $_POST['bot_edtelf'];
$id_comen = $_POST['ed_comen'];
$bot_comen = $_POST['bot_edcomen'];
$id_lic = mb_strtoupper($_POST['id_ed_lic'],'UTF-8');
$id_ea = mb_strtoupper($_POST['id_ed_ea'],'UTF-8');
$id_cb = mb_strtoupper($_POST['id_ed_cb'],'UTF-8');
$id_resc = mb_strtoupper($_POST['id_ed_resc'],'UTF-8');


// EDITAR NOMBRE

if ($crt_nomb == "EDNOMB"){    
$activ_sql_ed_nom = "UPDATE usuarios_shr SET NOMBRE = '$id_nomb' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_nom); 
		  $stmt->execute();
 }

// EDITAR LOCALIDAD
if ($bot_loca == "EDITAR LOCALIDAD"){     
    $activ_sql_ed_loc = "UPDATE usuarios_shr SET  LOCALIDAD = '$id_loca' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_loc); 
		  $stmt->execute();
}

// EDITAR PROVINCIA
if ($crt_prov == "EDPROV"){     
    
if($id_lic == "EA") {
 if(!empty($id_ea)){
     	$alias_ea = $id_num_reg.'-'.$id_ea.'--'.$id_prov ;
		
	$activ_sql_per_provea = "UPDATE usuarios_shr SET ALIAS_EA = '$alias_ea', PROVINCIA = '$id_prov' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_per_provea); 
		  $stmt->execute();  
 }
 if(!empty($id_cb)){
     	$alias_cb = $id_num_reg.'-CB-'.$id_cb.'--'.$id_prov ;
		
	$activ_sql_per_provcb = "UPDATE usuarios_shr SET ALIAS_CB = '$alias_cb', PROVINCIA = '$id_prov' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_per_provcb); 
		  $stmt->execute();  
 }
}                      
if($id_lic == "CB") {
 if(!empty($id_cb)){
  	$alias_cb = $id_num_reg.'-CB-'.$id_cb.'--'.$id_prov ;
		
	$activ_sql_per_provcb1 = "UPDATE usuarios_shr SET ALIAS_CB = '$alias_cb', PROVINCIA = '$id_prov' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_per_provcb1); 
		  $stmt->execute(); 
}
}

if($id_lic == "RADIOESCUCHA") {
 if(!empty($id_resc)){
 	$alias_resc = $id_num_reg.'-R-'.$id_resc.'--'.$id_prov ;

	$activ_sql_per_provresc = "UPDATE usuarios_shr SET ALIAS_RESC = '$alias_resc', PROVINCIA = '$id_prov' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_per_provresc); 
		  $stmt->execute(); 
}
}
}

// EDITAR PAIS
if ($crt_pais == "EDPAIS"){    
if(!empty($id_pais)){
  $activ_sql_ed_pais = "UPDATE usuarios_shr SET PAIS = '$id_pais' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_pais); 
		  $stmt->execute();
}
 }

// EDITAR EMAIL
if ($crt_mail == "EDMAIL"){    
if(!empty($id_mail)){

$sql ="SELECT AUTO, EMAIL FROM usuarios_shr WHERE EMAIL = '$id_mail' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
	while($mostrar=mysqli_fetch_array($result)){
	 $nrdmail = $mostrar['AUTO'];
	}
echo " 
<script>
alert('@EMAIL DUPLICADO\\nVERIFIQUE EL REGISTRO N°$nrdmail');
document.location.href='zpmen.php';
</script>";
}else {
    
 $activ_sql_ed_email = "UPDATE usuarios_shr SET EMAIL = '$id_mail' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_email); 
		  $stmt->execute();   
}
}
}

// EDITAR TELEFONO
if ($bot_telf == "EDITAR TELEFONO"){   
$activ_sql_ed_telf = "UPDATE usuarios_shr SET TELEFONO = '$id_telf' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_telf); 
		  $stmt->execute();
}

// EDITAR COMENTARIOS
if ($bot_comen == "EDITAR COMENTARIOS"){
$activ_sql_ed_comen = "UPDATE usuarios_shr SET COMENTARIOS = '$id_comen' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_comen); 
		  $stmt->execute();
     }
 echo " <script> document.location.href='zpmen.php';</script>";
  ?>
</body>
</html>