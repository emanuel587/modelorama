<?php
/*CONEXION A MSQL*/
                //("Direccion","","Nombre de la base de datos") 
$link= mysqli_connect("localhost:3306","root","","datos23");
//Revisamos si hay conexión
if ($link === 0){
    echo "No hay conexión";
} else {
  //  echo "Conexión exitosa";
//Crear cuatro variables para enviar a la bd
$nombre = $_POST["nombre"];
$telefono = $_POST["tel"];
$email = $_POST["email"];
$mensaje = $_POST["msj"];
//Consulta INSERT a MYSQL
$insertar = "insert into formulario (nombre,telefono,correo,msj) VALUES ('$nombre','$telefono','$email','$mensaje')";
//Coorroborar
if (mysqli_query($link,$insertar)){
    echo"Su pedido fue realizado exitosamente";
}else{
    echo"error:".mysqli_error($link);
}
//cerramos conexión
mysqli_close($link);
}
?>