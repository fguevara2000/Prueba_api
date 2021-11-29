<?PHP
  require_once("Conexion.php");
  mysqli_query($cn,"INSERT INTO Usuarios VALUES(null,'Julio','12345','Administrador')");
  mysqli_close($cn);
?>
