<?php
//conexion a mysql
$link=mysqli_connect("localhost","root","datos23");
//recoger el valor del html
$clave =$_POST["clave"];
/*Consulta eliminar*/
$elimina="DELETE FROM formulario WHERE id = '$clave' ";
if(mysqli_query($link, $elimina)){
    echo '<script type="text/javascrip">
    alert("Delete successfully");
    window.localitatio.href "consulta.php";
    </script>';
    else{
        echo "error" .mysqli_error($link);

        mysqli_close($link);
    }

?>