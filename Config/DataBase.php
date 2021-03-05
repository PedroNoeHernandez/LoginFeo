<?php
    $host='localhost';
    $user = 'pedro';
    $password = 'pedro';
    $database ='mvc';
    $conexion = mysqli_connect($host,$user,$password,$database);
    if (!$conexion) {
    die('No pudo conectarse: ' . mysql_error());
    }else{
	echo 'conectado';
    }
?>
