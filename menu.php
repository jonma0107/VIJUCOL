


<?php
 /*
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);

$USUARIO=$_POST['user'];

$verificar_RADICADO =  $mysqli -> query("SELECT nombre FROM usuarios WHERE usuario = $USUARIO");




$busqueda= $mysqli->query("SELECT nombre FROM usuarios WHERE usuario='$USUARIO'");
if(mysqli_num_rows($busqueda)>0)
{
      $query = "select * from usuarios where usuario = '$USUARIO'";
      $result = $mysqli->query($query);

  while ($registro = mysqli_fetch_array($result)){





 $query = "select * from usuarios where usuario = $USUARIO'";
    $result = $mysqli->query($query);


if (mysqli_num_rows($verificar_RADICADO) > 0){
$registro = mysqli_fetch_array($result);*/




  //$mensaje="Bienvenido".$registro['nombre'];


  // $mensaje="Bienvenido - ".$_POST['user'];
  //   echo "<script>alert('$mensaje');
  //   </script>";


/*}*/
 ?>











<!DOCTYPE html>
<html>
<head>
  <title>Menu Desplegable</title>
  <link rel="stylesheet" href="./estilos.css">

</head>
<body>
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


</body>


</html>





