<?php
#configuracion para habilitacion de modo debug
require_once("config.php");

if (DEBUG == "true") {
    ini_set('display_errors',1);
}else {
    ini_set('display_errors',0);
}

#CLASES DE LA CAPA MODELO DE BASE DE DATOS

require_once("class/Conn/tool.php");
require_once("class/Login/loginModel.php");
require_once("class/Usuarios/usuariosModel.php");
//include_once dirname( __DIR__ ) . '../model/class/Conn/tool.php';
?>