<?php
include '../Config/DataBase.php';
//probando una consulta;
$sql = "SELECT * FROM Usuarios";
$resultado = mysqli_query($conexion, $sql);
while($row = mysqli_fetch_array($resultado)){
	echo 'usuario:' .$row['Usuario'].'- correo:'.$row['Correo'].'<br>';
}

?>
