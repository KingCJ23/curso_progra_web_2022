<?php
class usuariosModel {
    /*
    MEtodo para obtener todos los usarios
    */
    function getUsuarios(){
        $conexionClass = new tool();
        $conexion = $conexionClass->conectar();
        $sql = "SELECT
        id,
        nombres,
        apellidos ,
        `user`,
        password ,
        fecha_created,
        fecha_updated
    FROM
        `user`;";
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    /**
     *metodo para eliminar usuarios
     */
    function eliminarUsuario($id){
        $conexionClass = new tool();
        $conexion = $conexionClass->conectar():
        $sql = "DELETE FROM users WHERE id = $id;";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            $id = 
        }
    }
}
