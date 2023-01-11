<?php
  /*  include("coneccion.php");//Contiene la coneccion a la base de datos, funciona bien la estoy usando en otra parte de la pagina web.
*/


include("conexion.php");
$sql=new mysqli($host,$user,$pw,$db);



    @$mostrar=$_POST['mostrar'];

    if($mostrar){
        $sql="SELECT nombre, apellido,cedula direccion,telefono,celular,email FROM usuarios";
        $rsql= mysqli_query($conn,$sql) or die (mysql_error());
        $sw=1;
    }

    /************Formulario*****************/
    echo"<form action=index.php#clients method=post>";       
    echo "<table id='tabla3'> <tr>";
        echo "<th>usuario</th>";
        echo "<th>nombre</th>";
        echo "<th>apellido</th>";
        echo "<th>cedula</th>";
        echo "<th>Direccion</th>";
        echo "<th>Telefono</th>";
        echo "<th>celular</th>";
        echo "<th>email</th>";
        echo"<input type=submit name=mostrar value=Obtener Datos>";//Pulsa el boton para "generar tabla"
    echo "</tr>";
    echo"</table>";
    echo"</form>";
    if(@$sw>0){
        echo "<table id='tabla4'>";
        while($row = mysqli_fetch($rsql)){
             echo"<tr>";
                echo "<td>";
                    echo $row['usuario'];
                echo "</td>";
                echo "<td>" ;
                    echo $row['nombre'];
                echo "</td>";
                echo "<td>" ;
                    echo $row['apellido'];
                echo "</td>";
                echo "<td>" ;
                    echo $row['cedula'];
                echo "</td>";
                echo "<td>";
                    echo $row['direccion'];
                echo "</td>";
                echo "<td>";
                    echo $row['telefono'];
                echo "</td>";
                echo "<td>" ;
                    echo $row['celular'];
                echo "</td>";
                echo "<td>" ;
                    echo $row['email'];
                echo "</td>";
            echo"</tr>";
        }
        echo"</table>";
    }
?>