<?php
session_start(); //sentencia que permite inicializar una sesion o sistema de logueo
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);
if(isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['clave']) && !empty($_POST['clave'])){
	$sel=$mysqli->query("SELECT * FROM usuarios WHERE usuario='$_POST[user]'");
	$sesion=mysqli_fetch_array($sel);
	//La siguiente parte sirve para verificar los datos de usuario y contraseña
	if($_POST['clave']==$sesion['clave']){
		$_SESSION['username']=$_POST['user'];
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>SELECCION DE TRABAJO</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./estilos.css">
</head>
<body>


<header>
  <div class="contenedor">
    <!--ESTE EL EL CODIGO QUE MUESTRA EL LOGOTIPO
      <div class="logo">
        <img src="http://dummyimage.com/200x100/000/fff&text=LOGO" alt="">
      </div>


    <div class="menu_bar">
      <a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
    </div>-->

<nav>
       <ul class="nav">
         <li><a href="menu.php">Inicio</a></li>
         <li><a href="">Procesos</a>
             <ul>
               <li><a href="ESPECIALIDAD.php">Crear</a></li> <!--OK-->
               <li><a href="">Modificar</a>
                  <ul>
                    <li><a href="modificar_procesos_radicado.php">Radicado</a></li>
                    <li><a href="">Demandante</a>
                      <ul>
                        <li><a href="modificar_procesos.php">Cedula</a></li>
                        <li><a href="modificar_proc_nom_dte.php">Nombre</a></li>
                      </ul>
                    </li>
                    <li><a href="">Demandado</a>
                      <ul>
                        <li><a href="modificar_procesos_dmdo.php">Cedula</a></li>
                        <li><a href="modificar_proc_nom_ddo.php">Nombre</a></li>
                      </ul>
                    </li>
                  </ul>
               </li>
               <li><a href="">Adicionar</a></li>
               <li><a href="Formborrarprocesos.php">Eliminar</a></li>
              <li><a href="consulta_proceso_dte.php">Consultar</a></li>
             </ul>
         </li>
         <li><a href="">Usuarios</a>
             <ul>
               <li><a href="registro1.PHP">Crear</a></li>
               <li><a href="modificar_USUARIO.php">Modificar</a></li>
               <li><a href="Formborrarusuario.php">Eliminar</a></li>
               <li><a href="">Cambiar contrasena</a></li>
             </ul>
         </li>

         <li><a href="cerrar_sesion.php">Salir</a></li>
       </ul>
       </nav>
     </div>
     </header>


	<section>


<section>
	<form action="ESPECIALIDAD.php" method="POST" >
		<div id="inicio1" align="center">
			SELECCIONE UNA OPCION<BR><BR>
			<select name="opcion">
				<option value="0"> Seleccione</option>
				<option value="1">Crear</option>
				<option value="2">Modificar</option>
				<option value="3">Consultar</option>
				<option value="4">Adicionar</option>

			</select>
			<input type="submit" value="CARGAR">
		</div>

	</form>

</body>
</html>
</section>



<?php
	}
	else{
		echo "Combinacion erronea";
	}
}
else{
	echo "Debes llenar todos los campos";
}
?>

