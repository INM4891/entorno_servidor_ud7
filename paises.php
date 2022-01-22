<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <style type="text/css">
        
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-left: 50px;

        }
        h1 {
            color:rgb(255, 5, 130);
        }
        table, td, th{
            border: 1px solid;
            width: 600px;
            text-align: center;
        }

    </style>
</head>
<body>
    
<?php

// Creamos la conexión  pasando los parámetros servidor, usuario, contraseña y base de datos.
$conexion = new mysqli("localhost", "root", "", "paises"); 

//Controlamos posible error en la conexión

if($conexion->connect_errno){
    echo "Fallo de conexión, por favor revíselo " . $conexion->connect_errno;
    exit();
}

//Hacemos la consulta y recogemos el resultado de la consulta

$resultado = $conexion->query("SELECT * FROM paises");

//Pintamos la tabla

echo "<h1>Países y Continentes</h1>";
echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CONTINENTE</th>
      </tr>";

//Recorremos todas las filas y vamos insertando los datos en la tabla
while ($fila = $resultado->fetch_assoc()) {

    echo "<tr>";
        echo "<td>" . $fila['ID'] . "</td>";
        echo "<td>" . $fila['NOMBRE'] . "</td>";
        echo "<td>" . $fila['CONTINENTE'] . "</td>";
    echo "</tr>";
}
echo "</table>";

//Cerramos la conexión
$conexion->close(); 

?>

</body>
</html>


