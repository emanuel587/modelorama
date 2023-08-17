<?php
/*paso 1. hacer la conexión link= */
$link=mysql_connect("localhost","root","","datos23");
//verificamos la conexión
if($link===0){
    die ("Error" .mysql_connect_error());             //Esto sirve para verificar si hay errores
}

/*paso 2 obtener los datos del formulario*/
$id = $_POST ["id"];
$nombre = $_POST ["nombre"];
$telefono = $_POST ["tel"];
$correo = $_POST ["email"];
$mensaje = $_POST ["msj"];

/*paso3 Consulta*/
$actualizar = " UPDATE formulario SET nombre='$nombre', telefono='$telefono', correo='$email', mensaje='$msj'  WHERE id=$id ";

/*paso4 Ejecutar la consulta*/
if(mysqli_query($link,$actualizar )){
    if (mysqli_affected_rows($link))> 0 {

    }else{
echo '<script type="text/javascript">
  alert("no existe ese registro");
window.location.href="actualizar.html"
</script>
';  
    }
}else{
    echo '<script type="text/javascript">
    alert("datos no actualizados :S");
  window.location.href="actualizar.html"
  </script>
  '; 
}
mysqli_close($link);
?>