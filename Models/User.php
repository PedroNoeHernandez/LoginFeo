<?php
//include '../Config/DataBase.php';

class User{

    public $correo ='';
    public $contrasenia = '';
    public $id = 0;
    public $host = 'localhost';
    public $user = 'pedro';
    public  $password = 'pedro';
    public $database ='mvc';

    function __construct($correo,$contrasenia) {
        $this->correo = $correo;
        $this->contrasenia = $contrasenia;
    }

    function validar(){
	$conexion = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        $sql = "SELECT * FROM Usuarios WHERE Correo = '$this->correo' AND contrasenia = '$this->contrasenia'";
        $result = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $this->id = $row['id'];
		//mysqli_close($conexion);
	    }
            return true;
	}else{
	return false;
	}
}
}
