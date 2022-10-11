<?php
phpinfo();
fuction conexion(){
    //variables para conexion
    $host = 'localhost';
    $usuario='root';
    $password='Admin*123';
    $database='ServidorWeb';

    $conexion = mysqli_connect($host, $usuario, $password, $database);

    if($conexion){
        echo "Conexion exitosa";
        mysqli_query($conexion, "SET NAMES 'utf8'");

    }else {
        echo "Conexion fallida".mysqli_error();
    }

    return $conexion;
}

$resultado = conexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>
</head>
<body>
    
</body>
</html>