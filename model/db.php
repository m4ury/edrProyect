<?php

class db{
    public $conexion;
    private $host = 'localhost';
    private $user_db = 'root';
    private $pass_db = '';
    private $db = 'tuoficina';

public function __construct()
    {
    $this->conexion = new mysqli($this->host,$this->user_db,$this->pass_db,$this->db);

        if($this->conexion->errno){
            die("Error en la conexion MySql".$this->conexion->error);
        }
    }

    public function cerrar(){
        $this->conexion->close();
    }

}