<?PHP
require_once("Conexion.php");
$sql = "SELECT * FROM Dispositivos_id";
$resultado = $cn->query($sql);
$cont = $resultado -> num_rows;
  if(! $resultado )
    {
      echo "Error";
    }
    else if($cont<=0)
    {
      echo "Sin datos";
    }
    else {
      echo $cont.",";
        while ($row = $resultado -> fetch_assoc())
         {
            echo $row["id"].",".$row["Host"].",".$row["IP"].",".$row["MAC"].",".$row["Gateway"].",";
        }
    }
    $cn -> close();
?>
