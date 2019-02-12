<?php
$conexion = mysql_connect("localhost", "user","password");

mysql_database("nombre_base_datos",$conexion);

$query = mysql_query("select * from tabla",$conexion);

$resultado = ($query,0);
 ?>
