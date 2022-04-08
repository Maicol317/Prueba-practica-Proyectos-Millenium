<?php 
  $conexion = mysql_connect ("localhost","root","PASSDB");
  if (!$conexion){
    echo "No se pudo Establecer conexión con La BBDD";
  } 
  $bd=mysql_select_db("millenium",$conexion);   
  if (!$bd){}
  mysql_set_charset('utf8');date_default_timezone_set('America/Bogota'); 
?>