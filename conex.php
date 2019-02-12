<?php
$conexion = mysql_connect("localhost", "lzapatazamb","");

mysql_database("formulario",$conexion);

$Nombre=$POST['Nombre'];
$Email=$POST['Email'];

mysql_query("INSERT TO formulario (Nombre,Email) VALUES('$Nombre','$Email')");
// $query = mysql_query("select * from tabla",$conexion);
$resultado = ($query,0);
 ?>
