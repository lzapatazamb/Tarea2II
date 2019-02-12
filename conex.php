<?php
$conexion = mysql_connect("localhost", "lzapatazamb","");

mysql_database("formulario",$conexion);

$Nombre=$POST['Nombre'];
$Email=$POST['Email'];

$sql="INSERT TO formulario (Nombre,Email) VALUES('$Nombre','$Email')";
// $query = mysql_query("select * from tabla",$conexion);
$resultado = mysql_query($sql);
if (! $result){
                              echo “La consulta SQL contiene errores.”.mysql_error();
                              exit();
               }else {echo “<center><font color=’RED’>DATOS INSERTADOS CORRECTAMENTE</font><a
ref=’http://registro.elarenal.com.mx/ejemplo/formulario.html’>Volver</a&gt;'”;
               }
 ?>
