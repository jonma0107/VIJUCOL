<?php
include("conexion.php");


$_POST['nombre']=strtoupper($_POST['nombre']);
$_POST['apellido']=strtoupper($_POST['apellido']);



if(isset($_POST['cedula']) && !empty($_POST['cedula']) && 
isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['apellido']) && !empty($_POST['apellido']) &&
isset($_POST['pw']) && !empty($_POST['pw']) &&
isset($_POST['direccion']) && !empty($_POST['direccion']) &&
isset($_POST['telefono']) && !empty($_POST['telefono']) &&
isset($_POST['celular']) && !empty($_POST['celular']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['perfil']) && !empty($_POST['perfil'])){
$mysqli=new mysqli($host,$user,$pw,$db);
/*or die("Error de conexion con servidor");
mysql_select_db($db,$con)
or die("Error al conectar con BASE DE DATOS");*/

$mysqli->query("INSERT INTO usuarios(usuario,cedula,nombre,apellido,clave,direccion,telefono,celular,email,perfil) VALUES('$_POST[cedula]','$_POST[cedula]','$_POST[nombre]','$_POST[apellido]','$_POST[pw]','$_POST[direccion]','$_POST[telefono]','$_POST[celular]','$_POST[email]','$_POST[perfil]')");




$mensaje = "Datos insertados ";
    print "<script>alert('$mensaje');
     window.location='registro1.PHP';</script>";





	/*echo "NOMBRE: ".$_POST['nombre']."<br>";
	echo "USER: ".$_POST['user']."<br>";
	echo "PASSWORD: ".$_POST['pw']."<br>";
	echo "E-MAIL: ".$_POST['email']."<br>";*/
}
else{
	echo "Verifica que llenaste los campos y que los password coinciden";
}
?>