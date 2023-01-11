<?php 
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);

?>


<html>
<head>
<title>Modificar Datos del Proceso - RAMA JUDICIAL</title>
<META name='robot' content='noindex, nofollow'>
</head>
<body>
<?php
// Actualizamos en funcion del id que recibimos
$ccdemandante = $_POST['cedula']; 
$radicado = $_POST['radicado'];
$juzgado = $_POST['juzgado'];
$proceso = $_POST['proceso'];
$demandante = $_POST['demandante'];
$demandado = $_POST['demandado'];
$ccdemandado = $_POST['ccdemandado'];
$etapa = $_POST['etapa'];
$estado = $_POST['estado'];





/*$clave = $_POST["clave"];
$con = md5($clave);*/

$sSQL ="UPDATE procesos SET juzgado='$juzgado',proceso='$proceso',demandante='$demandante',demandado='$demandado',ccdemandado=$ccdemandado,etapa='$etapa',estado='$estado' WHERE radicado='$radicado'"; 
$mysqli->query($sSQL);

$mensaje = "Los Datos Se Han Modificado Correctamente";
print "<script>alert('$mensaje'); 
window.location='modificar_procesos_radicado.php';</script>";
?>
</body>
</html>