 <?php
session_start();
$_SESSION['claveint'] = 0;
session_unset();
session_destroy();
?>
<script language="JavaScript">
document.location.href = "zona_priv.php"
</script>
