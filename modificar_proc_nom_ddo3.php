<?php
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);
$ccdemandante = $_POST['nombre'];



?>


<html>
<head>
<title>Modificar Datos del Proceso - RAMA JUDICIAL</title>
<META name='robot' content='noindex, nofollow'>
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
<?php
// Actualizamos en funcion del id que recibimos
$ccdemandante = $_POST['cedula'];
/*$radicado = '$_POST[radicado]';*/
$juzgado = $_POST['juzgado'];
$proceso = $_POST['proceso'];
$demandante = $_POST['demandante'];
$demandado = $_POST['demandado'];
$ccdemandado = $_POST['ccdemandado'];
$etapa = $_POST['etapa'];
$estado = $_POST['estado'];







/*$clave = $_POST["clave"];
$con = md5($clave);*/

$sSQL ="UPDATE procesos SET juzgado='$juzgado',proceso='$proceso',demandante='$demandante',demandado='$demandado',ccdemandado=$ccdemandado,etapa='$etapa',estado='$estado' WHERE ccdemandante='$ccdemandante'";
$mysqli->query($sSQL);

$mensaje = "Los Datos Se Han Modificado Correctamente";
print "<script>alert('$mensaje');
window.location='modificar_procesos.php';</script>";
?>

</section>
</body>
</html>
