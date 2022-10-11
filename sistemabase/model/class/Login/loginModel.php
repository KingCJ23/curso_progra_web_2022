<?php

class loginModel{
// Metodo de autenticacion
function auntenticar($user, $pass){
    $connClass = new tool();
    $conexion = $connClass->conectar();

    $sql = "SELECT * FROM user Where
    Upper(user) =Upper('$user')
     and password='$pass'";

     $resultado = mysqli_query($conexion, $sql);
     $connClass->desconectar($conexion);
     return $resultado;
}
}

?>