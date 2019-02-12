 <?php
include ("index.html");
$mysqli = new mysqli("localhost", "lzapatazamb", "", "test");
/* comprueba la conexión */
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
exit();
         }
/* selecciona bd */
$mysqli->select_db("formulario");
/*variables*/
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Eleccion = $_POST['Eleccion'];
/*Agregar a tabla*/
$sql = "INSERT INTO formulario(Nombre,Email,Password,EstadoC)VALUES ('$Nombre','$Apellido','$Email','$Password','$Eleccion')";
$result = mysqli_query($mysqli,$sql);
  if (! $result){
     echo "La consulta SQL contiene errores.".mysqli_error();
  exit();
                  }else{
                    echo "Registrado exitosamente";
                  }
$mysqli->close();
?>
