<?php
$conexion = mysql_connect("localhost", "lzapatazamb","");

mysql_database("formulario",$conexion);

$query = mysql_query("select * from tabla",$conexion);

$resultado = ($query,0);
 ?>
