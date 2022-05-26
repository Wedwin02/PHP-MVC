<?php
include_once 'models/alumno.php';


class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();

    }

    public function get(){

        $items = [];
        try {
            $query = $this->db->connect()->query('SELECT * FROM alumnos;');

            while ($row = $query->fetch()) {
                $item = new Alumno();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                $item->email = $row['email'];
                $item->usuario  = $row['usuario'];
                $item->pass = $row['pass'];

                array_push($items,$item);
            }
            return $items;
        } catch (PDOException $e) {
            
        }
       
    }
}


?>