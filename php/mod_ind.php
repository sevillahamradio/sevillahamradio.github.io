<?php
session_start();
include("check.php"); 
?>

<!DOCTYPE html>
<html>
<body>

<?php
setlocale(LC_ALL, 'es_ES');

if(empty($_POST['numreg_ed_ind'])){
echo "
<script> 
alert('ERROR EN EL REGISTRAR\\nNUMERO VACIO');
 document.location.href='zpmen.php';
</script>";
	 }
	
// llamada conexion
	require_once('conexion.php');
	// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
$id_num_reg = $_POST['numreg_ed_ind'];
$in_ea = mb_strtoupper($_POST['ed_inea'],'UTF-8');
$in_cb = mb_strtoupper($_POST['ed_incb'],'UTF-8');
$in_resc = mb_strtoupper($_POST['ed_inresc'],'UTF-8');
$ed_bot_ea = $_POST['bot_edea'];  
$edbot_cb = $_POST['b_edcb'];
$ed_bot_resc = $_POST['bot_edresc'];
$id_prov = $_POST['i_prov']; 

// EDITAR INDICATIVO EA
	 
if ($ed_bot_ea == "EDITAR EA"){  
   if (!empty($in_ea)) {
   
		$alias_ea = $id_num_reg.'-'.$in_ea.'--'.$id_prov ;
		
	$activ_sql_ed_ea = "UPDATE usuarios_shr SET IND_EA = '$in_ea', ALIAS_EA = '$alias_ea' WHERE AUTO ='$id_num_reg'"; 	 
		 $stmt = $conn->prepare($activ_sql_ed_ea); 
		  $stmt->execute();					         
    }
  }
 

  // EDITAR INDICATIVO CB
if ($edbot_cb == "EDITAR CB"){  
	   if (!empty($in_cb)) {
  
  $alias_cb = $id_num_reg.'-CB-'.$in_cb.'--'.$id_prov ;
$activ_sql_ed_cb = "UPDATE usuarios_shr SET IND_CB = '$in_cb', ALIAS_CB = '$alias_cb' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_cb); 
		  $stmt->execute();					         		 
	 }	 
 }
  // EDITAR INDICATIVO RADIOESCUCHA
if ($ed_bot_resc == "EDITAR RADIOESCUCHA"){ 
  if (!empty($in_resc)) {
 $alias_resc = $id_num_reg.'-R-'.$in_resc.'--'.$id_prov;
 $activ_sql_ed_resc = "UPDATE usuarios_shr SET IND_RESC = '$in_resc', ALIAS_RESC = '$alias_resc' WHERE AUTO ='$id_num_reg'"; 	
		 $stmt = $conn->prepare($activ_sql_ed_resc); 
		  $stmt->execute();					  
}
}

  echo " <script> document.location.href='zpmen.php';</script>";
?>
</body>
</html>