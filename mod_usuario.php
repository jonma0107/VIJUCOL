<?php

//llamar la conexion a la base de datos
/*require 'class/database.php';
$objData = new Database();*/


include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);




if(isset($_GET['opcion'])){

    $sth1 = $mysqli->prepare('select * from usuarios U inner join usuarios UD '
            . 'on U.idusuario = UD.idusuario WHERE U.idusuario = :idusuario');
    $sth1->bindParam(':idusuario', $_GET['opcion']);
    $sth1->execute();

    $result1 = $sth1->fetchAll();

}

$sth = $mysqli->prepare('SELECT idusuario, usuario FROM usuarios');
$sth->execute();

$result = $sth->fetchAll();

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Auto-llenar un Formulario</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    </head>
    <script type="text/javascript">
        function buscar(){
            var opcion = document.getElementById('userN').value;
            window.location.href = 'http://localhost:8080/PROYECTO_FINAL/index.php?opcion='+opcion;
        }
    </script>
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


        <form name="autoLlenar" action="salvar2.php" method="post">
            <div  id="mod_user" aling="center">
            <fieldset>

                <legend>Datos de Usuario:</legend>
                <label>Seleccione el Nombre del Cliente:</label>
                <select name="userN" id="userN" onchange="return buscar();">
                    <?php

                    if($result1){?>
                    <option value="<?php echo $result1[0]['idusuario'];?>">
                         <?php echo $result1[0]['usuario'];?>
                    </option>
                    <?php
                    }?>
                    <option value=""></option>
                    <?php

                    foreach ($result as $key => $value) {?>
                    <option value="<?php echo $value['idusuario'];?>">
                                   <?php echo $value['usuario'];?>
                    </option>
                    <?php

                    }

                    ?>
                </select>


                <br><br><label>Nombres:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="nombre1" value="<?php echo $result1[0]['nombre']?>" />
                <?php
                }else{?>
                    <input type="text" name="nombre1" value="" />
                <?php
                }
                ?>


                <br><br><label>Apellidos:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="apellido1" value="<?php echo $result1[0]['apellido']?>" />
                <?php
                }else{?>
                    <input type="text" name="apellido1" value="" />
                <?php
                }
                ?>



                <br><br><label>usuario:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="usuario" value="<?php echo $result1[0]['usuario']?>" />
                <?php
                }else{?>
                    <input type="text" name="usuario" value="" />
                <?php
                }
                ?>


                <br><br><label>Cedula:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="cedula1" value="<?php echo $result1[0]['cedula']?>" />
                <?php
                }else{?>
                    <input type="text" name="cedula1" value="" />
                <?php
                }
                ?>

                <br><br><label>Direccion:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="direccion" value="<?php echo $result1[0]['direccion']?>" />
                <?php
                }else{?>
                    <input type="text" name="direccion" value="" />
                <?php
                }
                ?>


                <br><br><label>Telefono:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="telefono" value="<?php echo $result1[0]['telefono']?>" />
                <?php
                }else{?>
                    <input type="text" name="telefono" value="" />
                <?php
                }
                ?>


                <br><br><label>Celular:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="celular" value="<?php echo $result1[0]['celular']?>" />
                <?php
                }else{?>
                    <input type="text" name="celular" value="" />
                <?php
                }
                ?>


                <br><br><label>Correo:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="email" value="<?php echo $result1[0]['email']?>" />
                <?php
                }else{?>
                    <input type="text" name="email" value="" />
                <?php
                }
                ?>


                <br><br><label>Genero:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="genero3" value="<?php echo $result1[0]['genero']?>" />
                <?php
                }else{?>
                    <input type="text" name="genero3" value="" />
                <?php
                }
                ?>


                 <br><br><label>Perfil:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="perfil2" value="<?php echo $result1[0]['perfil']?>" />
                <?php
                }else{?>
                    <input type="text" name="perfil2" value="" />
                <?php
                }
                ?>



                 <br><br><label>Tipo:</label>
                <?php
                if(isset($result1)){?>
                    <input type="text" name="tipo2" value="<?php echo $result1[0]['tipo']?>" />
                <?php
                }else{?>
                    <input type="text" name="tipo2" value="" />
                <?php
                }
                ?>




                <?php

                if(isset($result1)){?>
                    <input type="text" name="clave1" value="<?php echo $result1[0]['clave']?>" />
                <?php

                }else{?>
                    <input type="text" name="clave1" value="" />
                <?php

                }

                ?>
                <br><br><input type="submit" value="ENVIAR" />

            </fieldset>
             </div>
        </form>


    </section>
    </body>
</html>

