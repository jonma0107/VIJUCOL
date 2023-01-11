<?php
include("conexion.php");
// $mysqli = mysqli_connect("localhost","root","","rama_judicial");

?>



<html>
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<!-- <link rel='stylesheet' type='text/css' href='css/styles.css' /> -->
<title>VIJUCOL</title>

  <link rel="stylesheet" href="./estilos.css">

<style type="text/css">
.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Verdana, Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 2px solid #D6222E; width: 25%; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 9px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F72735), color-stop(1, #8F171F) );background:-moz-linear-gradient( center top, #F72735 5%, #8F171F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F72735', endColorstr='#8F171F');background-color:#F72735; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 2px solid #D6222E; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #000000; border-left: 2px solid #D6222E;font-size: 12px;font-weight: bold; }.datagrid table tbody .alt td { background: #D9D9D9; color: #000000; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #D6222E;background: #FFFFFF;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 3px; }
</style>

</head>


<body>

<section>


<div id="mod_proc_dte" align="center">



<!--<center><IMG SRC="imagenes/Logo.png" WIDTH=1100 HEIGHT=150>-->
<br><br><br>
<form name="form1" method="post" action="menu.php">
<br>
<div class="datagrid">

  <table align="center">
    <thead>
      <tr>
        <th colspan="2" rowspan="1" align="center">Seleccione su Usuario y digite su Contraseña</th>
      </tr>
    </thead>

    <tfoot>
      <tr>
        <td colspan="2">
          <div id="paging" align="center">
            <br>
            <input value="Cargar" onclick="valida_envia()" type="submit" width='30' class='classboton' style=cursor:pointer;>
            <br><br>
          </div>
        </td>
      </tr>
    </tfoot>

    <tbody>
      <tr>
        <td>USUARIO</td>
        <td>
          <select name="user">
            <option value="0">Seleccione:</option>

            <?php
            $mysqli = mysqli_connect($host,$user,$pw,$db);
            $query = mysqli_query($mysqli, "SELECT usuario FROM usuarios WHERE genero=0 ORDER BY idusuario");
            while ($valores = mysqli_fetch_array($query)) {
              echo '<option value="'.$valores[usuario].'">'.$valores[usuario].'</option>';
              }
            ?>

          </select>
        </td>
      </tr>

      <tr>
        <td>CONTRASEÑA</td>
        <td>
          <input type="password" name="clave">
        </td>
      </tr>
    </tbody>

  </table>
</div>
</form>




</div>
</section>
</body>
</html>
