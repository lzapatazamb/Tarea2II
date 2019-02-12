
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


   $Nombre = $_POST['Nombre'];
   $Email = $_POST['Email'];
  $sql = "INSERT INTO formulario(Nombre,Email)VALUES ('$Nombre','$Email')";
                  $result = mysqli_query($mysqli,$sql);
                  if (! $result){
                                 echo "La consulta SQL contiene errores.".mysqli_error();
                                 exit();
                  }else{
                    echo "Registrado exitosamente";
                  }

                 $mysqli->close();
                 ?>
