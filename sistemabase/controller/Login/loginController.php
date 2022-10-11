<?php   
ob_start();
session_start();

include_once("../../model/functions.php");
$loginModel = new loginModel();
$usuario = $_POST['inUsuario'];
$clave = $_POST['inPassword'];

$result = array();
$result = $loginModel->auntenticar($usuario, $clave);

if($row = mysqli_fetch_array($result)){
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_nombre'] = $row['nombres'];
    $_SESSION['user_apellido'] = $row['apellidos'];
    $_SESSION['username'] = $row['user'];
   
    header("location: ../../main.php");
    
}else{
    ///echo "no hay datos";
    echo "<script>
            alert('AUTENTICACION FALLIDA, INVALD¿IDOS');
            history.back();
            </script>";
            exit(-1);
            
}

//echo "USUARIO: ".$usuario." CLAVE: ".$clave;
ob_end_flush();
?>
