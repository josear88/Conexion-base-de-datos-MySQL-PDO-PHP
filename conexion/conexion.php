<?php

class Conexion {


    public $user = "root";
    public $password ;

    public $objetoPDO;

    function __construct(){

        try{

            $this->objetoPDO = new PDO('mysql:host=localhost;dbname=doctores',$this->user, $this->password);
        }catch(PDOException $e){

            echo "ERROR: " . $e->getMessage();
        }

    }
}
