<?php 
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);




?>


<html>
<head>
<title>Modificar Datos del Usuario - RAMA JUDICIAL</title>
<META name='robot' content='noindex, nofollow'>
</head>
<body>
<?php
// Actualizamos en funcion del id que recibimos




$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$celular= $_POST['celular'];
$email= $_POST['email'];
$genero= $_POST['genero'];
$perfil= $_POST['perfil'];




/*$clave = $_POST["clave"];
$con = md5($clave);*/

$sSQL ="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono',celular=$celular,email='$email',genero='$genero',perfil='$perfil' WHERE cedula='$_POST[cedula]'"; 
$mysqli->query($sSQL);

$mensaje = "Los Datos Se Han Modificado Correctamente";
print "<script>alert('$mensaje'); 
window.location='modificar_procesos.php';</script>";
?>
</body>
</html>