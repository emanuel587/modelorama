<?php
/*CONEXION A MYSQL*/
$link = mysqli_connect("localhost:3306","root","","datos23");
//Comprabamos conexión
if($link === 0){
    echo "error";
}
//consulta
$consulta = "SELECT * FROM formulario";
$resultado = $link->query($consulta);

//encabezado de la tabla
echo '<table border="1">';
'<tr>';
echo '<td>Nombre del producto</th>';
echo '<td>Codigo</th>';
echo '<td></th>';
echo '<td>Telefono</th>';
echo '<td>Mensaje</th>';
'</tr>';

echo'</tr>';
//Recorremos los registros
while($fila = $resultado ->fetch_assoc()){
     echo '<tri>'; /*Fila de nuestra tabla*/
     echo '<td>' .$fila['id'].'</td>';
     echo '<td>' .$fila['nombre'].'</td>';
     echo '<td>' .$fila['codigo'].'</td>';
     echo '<td>' .$fila['msj'].'</td>';
     echo '<td>' .$fila['']


'</tr>';
}
?>