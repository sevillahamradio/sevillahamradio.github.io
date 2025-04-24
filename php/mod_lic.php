<?php
session_start();
include("check.php"); 
?>

<!DOCTYPE html>
<html>
<body>
<?php	
setlocale(LC_ALL, 'es_ES');

if(empty($_POST['numreg_mod'])){echo "
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
$id_num_reg = $_POST['numreg_mod'];
$in_ea = mb_strtoupper($_POST['ea_in'],'UTF-8');
$in_cb = mb_strtoupper($_POST['cb_in'],'UTF-8');
$in_resc = mb_strtoupper($_POST['resc_in'],'UTF-8');
$id_prov = $_POST['i_prov'];
$id_bot_cbea = $_POST['cbea_mod'];
$id_bot_rsea = $_POST['rsea_mod'];
$id_bot_camcb = $_POST['camcb_mod'];
$id_bot_camresc = $_POST['camresc_mod'];
// CAMBIAR CB - EA
if ($id_bot_cbea == "MODIFICAR EA"){
    if (!empty($in_ea)) {
		$alias_ea = $id_num_reg.'-'.$in_ea.'--'.$id_prov ;
		
	$activ_sql_mod_ea = "UPDATE usuarios_shr SET TIPO_LIC = 'EA', IND_EA = '$in_ea', ALIAS_EA = '$alias_ea',  IND_RESC = '', ALIAS_RESC = '' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_mod_ea); 
		  $stmt->execute();					         
    }
     if (!empty($in_cb)) {
		 $alias_cb = $id_num_reg.'-CB-'.$in_cb.'--'.$id_prov ;
		 
	$activ_sql_mod_cb = "UPDATE usuarios_shr SET IND_CB = '$in_cb', ALIAS_CB = '$alias_cb' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_mod_cb); 
		  $stmt->execute();			 
	 }else{
		 $activ_sql_mod_cb1 = "UPDATE usuarios_shr SET IND_CB = '', ALIAS_CB = '' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_mod_cb1); 
		  $stmt->execute();	
		  }
}
// CAMBIAR RADIOESCUCHA - EA
if ($id_bot_rsea == "MOD R_ESCUCHA"){
    if (!empty($in_ea)) {
		$alias_ea = $id_num_reg.'-'.$in_ea.'--'.$id_prov ;
		
	$activ_sql_mod_ea1 = "UPDATE usuarios_shr SET TIPO_LIC = 'EA', IND_EA = '$in_ea', ALIAS_EA = '$alias_ea', IND_CB = '', ALIAS_CB = '', IND_RESC = '', ALIAS_RESC = '' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_mod_ea1); 
		  $stmt->execute();					         
    }
}

// CAMBIAR EA -> CB - RADIOESCUCHA -> CB 
 if ($id_bot_camcb == "MODIFICACION CB"){
	 if (!empty($in_cb)) {
	 $alias_cb = $id_num_reg.'-CB-'.$in_cb.'--'.$id_prov ;
$activ_sql_mod_cb2 = "UPDATE usuarios_shr SET TIPO_LIC = 'CB', IND_EA = '', ALIAS_EA = '', IND_CB = '$in_cb', ALIAS_CB = '$alias_cb', IND_RESC = '', ALIAS_RESC = '' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_mod_cb2); 
		  $stmt->execute();					         		 
		 
	 }	 
 }
 // CAMBIAR EA-CB ->RADIOESCUCHA
 if ($id_bot_camresc == "MOD R_ESCUCHA"){
 if (!empty($in_resc)) {
 $alias_resc = $id_num_reg.'-R-'.$in_resc.'--'.$id_prov;
 $activ_sql_mod_resc = "UPDATE usuarios_shr SET TIPO_LIC = 'RADIOESCUCHA', IND_EA = '', ALIAS_EA = '', IND_CB = '', ALIAS_CB = '', IND_RESC = '$in_resc', ALIAS_RESC = '$alias_resc' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_mod_resc); 
		  $stmt->execute();					  
}
}
echo " <script> document.location.href='zpmen.php';</script>";

?>
</body>
</html>