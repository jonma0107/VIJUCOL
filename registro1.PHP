<?php
include("conexion.php");
  $mysqli = new mysqli($host, $user,$pw, $db);
?>



<!DOCTYPE html>
<html>
<head>
  <title>PAGINA DE REGISTRO</title>
  <meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
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


  <!-- <section> -->

	<div id="registro" align="center">

	<form action="registro.php" method="post" name="form">

	<!-- <div id="registro" align="center"> -->
    <!-- <div> -->
    <h1 style="color:orange;">REGISTRO INICIAL USUARIO</h1>

		<table width="200" border="0" class="tabla"><BR><BR>

			<tr>
				<td>CEDULA: </td>
				<td><input type="text" name="cedula" maxlength="11"></td>
			</tr>
			<tr>
				<td>NOMBRE: </td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>APELLIDO: </td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr>
				<td>CONTRASEÑA: </td>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<td>DIRECCION: </td>
				<td><input type="text" name="direccion"></td>
			</tr>
			<tr>
				<td>TELEFONO: </td>
				<td><input type="text" name="telefono"></td>
			</tr>
			<tr>
				<td>CELULAR: </td>
				<td><input type="text" name="celular" maxlength="11"></td>
			</tr>
			<tr>
				<td>E-MAIL: </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>PERFIL: </td>
				<td><select name="perfil">
					<option value="3">3</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select></td>
			</tr>
      <tr>
        <td>&nbsp </td>
        <td><BR><input type="submit" value="CARGAR"></td>
      </tr>
		</table>



	</div>
	</form>
</div>
<!-- </section> -->
</body>
</html>
