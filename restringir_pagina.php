<?php 
session_start();
if(isset($_SESSION['username'])){
	echo "Puedes ver esta página";
	echo "<br><a href=cerrar_sesion.php>Cerrar sesion</a>";
	//destruir o cerrar sesion llama otro programa llamado destruir
}
else{
	echo "No puedes ver esta pagina. registrate e inicia sesion";
}
 ?>

