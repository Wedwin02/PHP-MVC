<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();

    }

    public function insert($datos){



        try {
            $query = $this->db->connect()->prepare('INSERT INTO alumnos (nombre,apellido,email,usuario,pass) VALUES (:nombre,:apellido,:email,:usuario,:pass)');
            $query->execute(['nombre'=>$datos['Nombre'],'apellido'=>$datos['Apellido'],'email'=>$datos['Email'],'usuario'=>$datos['Usuario'],'pass'=>$datos['Pass']]);
            return true;
        } catch (PDOException $e) {
            
        }
       
    }
}


?>