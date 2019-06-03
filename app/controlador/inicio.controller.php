<?php 

class InicioController{

 private $IncioModelo;

    //Creación del modelo
    public function __CONSTRUCT(){
        session_start();
        
    }

    //Llamado a la vista principal
    public function Principal(){
        
        require_once 'app/vista/inc/header.php';
        require_once 'app/vista/inicio/inicio.php';
        require_once 'app/vista/inc/footer.php';
    }
   

    
}
?>