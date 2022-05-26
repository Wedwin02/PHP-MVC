<?php
 class Errores extends Controller{

      function __construct()
      {
        parent :: __construct();
        $this->view->mensaje = "Error en la solicitud..";
       
          
      }
      function render(){
        $this->view->render('errores/index');
    }
 }

?>