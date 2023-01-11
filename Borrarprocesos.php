<?php 
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);

$reg=$mysqli->query("SELECT * FROM procesos WHERE radicado ='$_POST[radicado]'");

$reg1=$mysqli->query("INSERT INTO histoprocesos SELECT * FROM procesos WHERE radicado ='$_POST[radicado]'");


$reg2=$mysqli->query("UPDATE histoprocesos SET estado='2'");

if ($re=mysqli_fetch_array($reg)){
$mysqli->query("DELETE FROM procesos WHERE radicado ='$_POST[radicado]'");



echo '<script>
        alert("Datos eliminados correctamente");
          window.history.go(-1);
          </script>';
    exit;    
}else{

	echo '<script>
        alert("Datos NO eliminados");
          window.history.go(-1);
          </script>';
    exit;    

}
?>

