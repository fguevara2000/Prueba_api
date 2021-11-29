<?PHP
$us = $_REQUEST["us"];
$IP=$_REQUEST["IP"];
$MAC=$_REQUEST["MAC"];
$GATEWAY=$_REQUEST["GATEWAY"];

require_once("Conexion.php");
mysqli_query($cn,"INSERT INTO Dispositivos_id VALUES(null,'$us','12345','Administrador')");
mysqli_close($cn);
?>
