<?php

require './conexion/conexion.php';


class Usuarios extends Conexion{

    public $get_usuarios;

    function __construct(){
        //invocamos el constructor de la clase padre la cual es Conexion
        parent::__construct();
    }


    function getUsuarios(){

        $consulta = "SELECT * FROM agenda";
        //hacemos uso de el atribo objetoPDO de la clase padre para realizar la consulta
        $resultado = $this->objetoPDO->query($consulta);

        while($registro = $resultado->fetch()) {
            $this->get_usuarios[] =  $registro;
        }

        return $this->get_usuarios;
    }

}


$usuarios = new Usuarios;

$user = $usuarios->getUsuarios();

for($i=0; $i <count($user); $i++){
    print $user[$i]['usuario']."<br>";
    print $user[$i]['especialidad']."<br>";
}
