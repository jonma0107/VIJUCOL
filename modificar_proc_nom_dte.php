<?php
include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);

?>



<html>
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link rel='stylesheet' type='text/css' href='css/styles.css' />
<title>Modificar Datos del Usuario - Barrio Adentro</title>

  <link rel="stylesheet" href="./estilos.css">

<style type="text/css">
.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Verdana, Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 2px solid #D6222E; width: 25%; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 9px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F72735), color-stop(1, #8F171F) );background:-moz-linear-gradient( center top, #F72735 5%, #8F171F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F72735', endColorstr='#8F171F');background-color:#F72735; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 2px solid #D6222E; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #000000; border-left: 2px solid #D6222E;font-size: 12px;font-weight: bold; }.datagrid table tbody .alt td { background: #D9D9D9; color: #000000; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #D6222E;background: #FFFFFF;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 3px; }
</style>
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


<div id="mod_proc_dte" align="center">



<!--<center><IMG SRC="imagenes/Logo.png" WIDTH=1100 HEIGHT=150>-->
<br><br><br>
<form name="form1" method="post" action="modificar_proc_nom_dte2.php">
<br>
<div class="datagrid"><table align="center">
<thead><tr><th colspan="2" rowspan="1" align="center">Modificar Datos del Proceso RAMA JUDICIAL</th></tr></thead>
<tfoot><tr><td colspan="2"><div id="paging" align="center"><br><input value="Modificar" onclick="valida_envia()" type="submit" width='30' class='classboton' style=cursor:pointer;><br><br></div></tr></tfoot>
<tbody>





  <tr class="alt"><td align="center"><br>Nombre del Demandante<br><br></td><td align="center" >
<select name="nombre">
                <option value="0">Seleccione:</option>
                  <?php
                    $query = $mysqli -> query ("SELECT DISTINCT(demandante) FROM procesos;");
                      // $query = $mysqli -> query ("SELECT * FROM tipo_procesos ORDER BY idproceso;");
                    while ($valores = mysqli_fetch_array($query)) {
                      echo '<option value="'.$valores[demandante].'">'.$valores[demandante].'</option>';

                     }

                  ?>
              </select>

  <!--<input name="radicado1" maxlength=21 onkeypress="return justNumbers(event);" required placeholder="Ingresa Numero de RADICADO" size="35">-->

</td></tr>


</tbody>
</table></div>
</form>
</center>

</div>
</section>
</body>
</html>
