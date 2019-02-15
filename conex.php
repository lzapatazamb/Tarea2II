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
$CardHolder = $_POST['CardHolder'];
$CardNumber = $_POST['CardNumber'];
$CVV2 = $_POST['CVV2'];


/*Agregar a tabla*/
$sql = "INSERT INTO formulario(Nombre,Apellido,Email,Password,CardType,CardHolder,CardNumber,CVV2)VALUES ('$Nombre','$Apellido','$Email','$Password','$Eleccion','$CardHolder','$CardNumber','$CVV2')";
$result = mysqli_query($mysqli,$sql);
  if (! $result){
     echo "La consulta SQL contiene errores.".mysqli_error();
  exit();
                  }else{
                    echo "Registrado exitosamente";
                  }


$mysqli->close();

?>
