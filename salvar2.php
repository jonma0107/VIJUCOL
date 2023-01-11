<?php
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);
//llamar la conexion a la base de datos

echo $_POST['userN']."<br>";
echo $_POST['clave1']."<br>";
echo $_POST['userN']."<br>";
echo $_POST['nombre1']."<br>";
echo $_POST['apellido1']."<br>";
echo $_POST['cedula1']."<br>";
echo $_POST['direccion']."<br>";
echo $_POST['telefono']."<br>";
echo $_POST['celular']."<br>";
echo $_POST['email']."<br>";
echo $_POST['genero3']."<br>";
echo $_POST['perfil2']."<br>";
echo $_POST['tipo2']."<br>";
echo $_POST['usuario']."<br>";



$mysqli->query("UPDATE usuarios SET nombre='$_POST[nombre1]', usuario='$_POST[userN]', apellido='$_POST[apellido1]', cedula='$_POST[cedula1]', direccion='$_POST[direccion]', telefono='$_POST[telefono]', celular='$_POST[celular]', email='$_POST[email]', genero='$_POST[genero3]', perfil='$_POST[perfil2]', tipo='$_POST[tipo2]' WHERE idusuario='$_POST[userN]'");
	echo "Datos actualizados <br>";


?>


