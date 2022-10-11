function eliminarUsuario(id){
    $.ajax({
        type:'POST',
        data: 'eliminar_usuario=1&id='+id,
        url:'controller/Login/loginController.php',
        dataType: 'json',
        success: function(data){
            var resultado =data.resultado;
            if(resultado==1){
                alert('usuario eliminado exitosamente');
                cargarContenido('view/Usuarios/usuariosView.php')
            }else{
                alert('no se pudo eliminar el usuario');
            }
        }
    });
}