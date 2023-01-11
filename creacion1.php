<?php
include("conexion.php");
$mysqli = new mysqli($host, $user, $pw, $db);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Menu</title>
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
              <li><a href="ESPECIALIDAD.php">Crear</a></li>
              <!--OK-->
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
    <form action="Guardarprocesos.php" method="post" name="form">
      <div id="crear" align="center">

        <h1 style="color:orange;">CREAR UN NUEVO REGISTRO DE PROCESO</h1>
        <BR><BR>


        <table class="tabla_creacion">
          <tr>
            <td>RADICADO</td>
            <td><input type="text" name="radicado" maxlength=21></td>

          </tr>


          <tr>
            <td>JUZGADO</td>
            <td>
              <select name="juzgado">
                <option value="0">Seleccione:</option>
                <?php
                $query = $mysqli->query("SELECT * FROM juzgados WHERE ciudad='Bogota' ORDER BY idjuzgado;");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="' . $valores[idjuzgado] . '">' . $valores[juzgado] . '</option>';
                }

                ?>
              </select>
            </td>
          </tr>



          <tr>
            <td>PROCESO</td>
            <td>
              <select name="proceso">
                <option value="0">Seleccione:</option>
                <?php
                // $query = $mysqli -> query ("SELECT * FROM tipo_procesos WHERE tipo='$_POST[especi]' ORDER BY idproceso;");
                $query = $mysqli->query("SELECT * FROM tipo_procesos ORDER BY idproceso;");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="' . $valores[idproceso] . '">' . $valores[proceso] . '</option>';
                }

                ?>
              </select>
            </td>
          </tr>

          <tr>
            <td>DEMANDANTE</td>
            <td><input type="text" name="demandante"></td>
          </tr>
          <tr>
            <td>C.C. DEMANDANTE</td>
            <td><input type="text" name="cc_demandante" maxlength=11></td>
          </tr>
          <tr>
            <td>DEMANDADO</td>
            <td><input type="text" name="demandado"></td>
          </tr>
          <tr>
            <td>C.C. DEMANDADO</td>
            <td><input type="text" name="cc_demandado" maxlength=11></td>
          </tr>

          <tr>
            <td>ETAPA PROCESAL</td>
            <td>
              <select name="etapa">
                <option value="0">Seleccione:</option>
                <?php

                //$query = $mysqli -> query ("SELECT * FROM procesos WHERE tipo='$_POST[especi]' ORDER BY idproceso;");

                $query = $mysqli->query("SELECT * FROM etapas  ORDER BY idetapa;");
                //  tipo='$_POST[especi]' ORDER BY idetapa;");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="' . $valores[idetapa] . '">' . $valores[etapa] . '</option>';
                }

                ?>
              </select>
            </td>
          </tr>

          <tr>
            <td>OBSERVACIONES</td>


            <td><textarea name="campo1" style="width:500px; height:200px;">
				</textarea> </td>
          </tr>







          </tr>
          <tr>
            <td><br>&nbsp </td>
            <td><br><input href="presentacion.php" type="submit" value="CARGAR"></td>
          </tr>
        </table>

      </div>
    </form>
  </section>

</body>

</html>
