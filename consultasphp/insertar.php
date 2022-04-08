<?php
//ob_start();
include('datos.php');
ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if(isset($_POST)) {
  $ind = $_POST['ind'];
}

if($ind==1){
  $query=mysql_query("SELECT * FROM empleado ORDER BY id ASC",$conexion)
  or die("<br>Error en la consulta</br>".mysql_error());
  echo'<table class="table table-striped" id="tabla1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
    </tr>
  </thead>
  <tbody>';

  while ($row = mysql_fetch_array($query)) {
      echo'<tr>
        <th scope="row">'.$row['id'].'</th>
        <td>'.$row['nombre'].'</td>
        <td>'.$row['apellido'].'</td>
      </tr>';
  }
  echo '</tbody>
        </table>
              ';
}

if($ind==2){
  $firstName = strtoupper($_POST['firstName']);
  $lastName = strtoupper($_POST['lastName']);
  mysql_query("INSERT INTO empleado (nombre,apellido) VALUES('$firstName','$lastName')", 
         $conexion) or die("Problemas en el select".mysql_error());
         if (mysql_affected_rows()>0) {
           echo "1";
        }          
}
?>
