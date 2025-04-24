 <?php
session_start();
if (!isset($_SESSION['password'])) {
	 echo '
	 
 <script>
 alert("SECCION SIN PASSWORD");
 document.location.href = "zona_priv.php"</script>';
 // echo "<div align='center'><h1>Area reservada - Acceso denegado</h1></div>";
  die();
}
?>
