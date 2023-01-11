<?php



include("conexion.php");
$mysqli=new mysqli($host,$user,$pw,$db);


$radicado=$_POST['radicado'];
echo $radicado;

$verificar_RADICADO =  $mysqli -> query("SELECT * FROM procesos WHERE radicado = '$radicado'");
if (mysqli_num_rows($verificar_RADICADO) > 0) {
  echo '<script>
        alert("El radicado ya esta registrado");
          window.history.go(-1);
          </script>';
    exit;      
}
else{
if(is_numeric($_POST['radicado'])){
if(strlen($_POST['radicado'])==21){
     if(is_numeric($_POST['cc_demandante']) ){
         if(is_numeric($_POST['cc_demandado'])){
if(isset($_POST['radicado']) && !empty($_POST['radicado']) && 
  isset($_POST['juzgado']) && !empty($_POST['juzgado']) && 
  isset($_POST['proceso']) && !empty($_POST['proceso']) && 
  isset($_POST['demandante']) && !empty($_POST['demandante']) && 
  isset($_POST['cc_demandante']) && !empty($_POST['cc_demandante']) && 
  isset($_POST['demandado']) && !empty($_POST['demandado']) && 
  isset($_POST['cc_demandado']) && !empty($_POST['cc_demandado']) && 
  isset($_POST['etapa']) && !empty($_POST['etapa'])){
  
    include 'conexion.php';
    $mysqli=new mysqli($host,$user,$pw,$db);
    $radicado = $_POST["radicado"];
    $juzgado = $_POST["juzgado"];
    $proceso = $_POST["proceso"];
    $demandante = $_POST["demandante"];
    $ccdemandante = $_POST["cc_demandante"];
    $demandado = $_POST["demandado"];
    $ccdemandado = $_POST["cc_demandado"];
    $etapa = $_POST["etapa"];
    $observacion = $_POST["campo1"];
    $insertar = "INSERT INTO procesos(radicado, juzgado, proceso,demandante,ccdemandante, demandado, ccdemandado,etapa, observacion) VALUES ('$radicado','$juzgado','$proceso','$demandante','$ccdemandante','$demandado','$ccdemandado','$etapa','$observacion')";
    $resultado = $mysqli->query($insertar);
        if (!$resultado) {
          echo "$radicado";
          echo "$juzgado";
          echo "$proceso";
          echo "$demandante";
          echo "$ccdemandante";
          echo "$demandado";
          echo "$ccdemandado";
          echo "$etapa";
          echo 'Error al Registrarse';
          }
          else {
              /*$mensaje ="Ha Sido Registrado Exitosamente";
              print "<script>alert('$mensaje');
               window.location='index.php';</script>";*/

              echo '<script>
              alert("Ha Sido Registrado Exitosamente");
              window.history.go(-1);
              </script>';
              exit;      
          }
  }
  else{
  /*$mensaje= "Debe diligenciar todos los campos";
  print "<script>alert('$mensaje');
  window.location='ESPECIALIDAD.php';</script>";*/
              echo '<script>
              alert("Debe diligenciar todos los campos");
              window.history.go(-1);
              </script>';
              exit;    

  }
  }
        else{
         /*$mensaje="La cedula del demandado debe ser numerica";
    print "<script>alert('$mensaje');
     window.location='ESPECIALIDAD.php';</script>";*/

              echo '<script>
              alert("La cedula del demandado debe ser numerica");
              window.history.go(-1);
              </script>';
              exit;    
        }

    }

    else{
/*    $mensaje="La cedula del demandante debe ser numerica";
    print "<script>alert('$mensaje');
     window.location='ESPECIALIDAD.php';</script>";*/

              echo '<script>
              alert("La cedula del demandante debe ser numerica");
              window.history.go(-1);
              </script>';
              exit;    
    }
}
else{
  /*$mensaje="Error el radicado debe tener una extension 21 digitos";
  print "<script>alert('$mensaje');
  window.location='ESPECIALIDAD.php';</script>";*/
              echo '<script>
              alert("Error el radicado debe tener una extension 21 digitos");
              window.history.go(-1);
              </script>';
              exit;    
  }
  }
else{
  /*$mensaje="El dato de radicado debe ser numerico";
    print "<script>alert('$mensaje');
     window.location='ESPECIALIDAD.php';</script>";*/

              echo '<script>
              alert("El dato de radicado debe ser numerico");
              window.history.go(-1);
              </script>';
              exit;    
}
}

?>





  

