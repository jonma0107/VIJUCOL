<?php
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);



$reg=$mysqli->query("SELECT * FROM usuarios WHERE cedula ='$_POST[cedula1]'");

//$reg1=$mysqli->query("INSERT INTO histoprocesos SELECT * FROM procesos WHERE radicado ='$_POST[radicado]'");

$reg2=$mysqli->query("UPDATE usuarios SET estado='2' WHERE cedula ='$_POST[cedula1]' ");


if ($re=mysqli_fetch_array($reg)){
echo '<script>
        alert("Usuario eliminado");
          window.history.go(-1);
          </script>';
    exit;
}else{
echo '<script>
        alert("Usuario NO eliminado");
          window.history.go(-1);
          </script>';
    exit;
}

/*if ($re=mysqli_fetch_array($reg)){
$mysqli->query("DELETE FROM procesos WHERE radicado ='$_POST[radicado]'");
echo "datos eliminados";
}else{
echo "datos NO eliminados";
}*/
?>
