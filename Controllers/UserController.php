<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../Models/User.php';
$correo = $_GET['correo'];
$contrasenia = $_GET['contrasenia'];
$Usuario = new User($correo,$contrasenia);
echo $Usuario->contrasenia; // "<br>".$Usuario->correo;
if($Usuario->validar()){
    session_start();
    echo 'si eres tu cainal '.$Usuario->id;
}else{
    echo 'te la pelaste';
}
?>
