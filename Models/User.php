<?
include '../Config/DataBase';

class User{

    public $correo ='';
    private $contrasenia = '';
    private $id = 0;

    function __construct($correo,$contasenia) {
        $this->correo = $correo;
        $this->contrasenia = $contrasenia;
    }

    function validar(){
        $sql = "SELECT TOP 1 * FROM Usuarios WHERE Correo = '$this->correo' AND contrasenia = '$this->contrasenia'";
        $resultado = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysql_fetch_assoc($result)) {
                $this->id = $row[id];
                return true;
            }
        }else{
            return false;
        }
    }
}

?>
