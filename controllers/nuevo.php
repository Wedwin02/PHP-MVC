<?php

class Nuevo  extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
   
        
    }
    function  render(){
        $this->view->render('nuevo/index');
    }

    function RegistarAlumno(){
            
        $txtNombre = $_POST['txtNombre'];
        $txtApellido = $_POST['txtApellido'];
        $txtEmail = $_POST['txtEmail'];
        $txtUsuario = $_POST['txtUsuario'];
        $txtPass = $_POST['txtPass'];
        $mensaje = "";


        if($this->model->insert(['Nombre'=>$txtNombre,'Apellido'=>$txtApellido,'Email'=>$txtEmail,'Usuario'=>$txtUsuario,'Pass'=>$txtPass])){
            $mensaje =  "Insertado con exito";
        }else{
            $mensaje = "Error al insertar";
        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }



}

?>