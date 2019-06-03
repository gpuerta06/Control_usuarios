<?php 

require_once 'app/modelo/login.php';

class LoginController{

 private $sesionModelo;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->sesionModelo = new login();
    }

    //Llamado Login
    public function Index(){
        require_once 'app/vista/inc/header-login.php';
        require_once 'app/vista/login/login.php';
        require_once 'app/vista/inc/footer-login.php';
    }
    //Llamado Logout
    
    public function CloseSession(){
        session_destroy();
        header("location: ./");
    }
    //Función que controla el proceso de sesion
    public function Session(){
            //Inatanciamos la clase login
                $ses = new login();  //$ses es un objeto   
                //creamos las propiedades que tendrán la información suministrada por el form
                $ses->usuario = $_REQUEST['usuario'];
                $ses->clave = md5($_REQUEST['clave']);
                //Realizamos una búsqueda para obtener los intentos del usuario suministrado por el form
                $persona = $this->sesionModelo->Obtenerintentos($ses);
                $datos = [
                'persona' => $persona
                    ];
                    foreach($datos['persona'] as $persona) :
                        $persona->fk_rol;
                        $persona->fk_intento;
                        $persona->fk_estado;
                        
                        endforeach;
    //Tenemos el primer control que valida si el usuario existe en la base de datos
        if ($this->sesionModelo->ValidarExisUser($ses)) {  
        //Tenemos el segundo control que valida si el usuario esta activo o inactivo                  
            if ($persona->fk_estado==1) {
                //Tenemos el tercer control que valida los intentos fallidos 
                if ($this->sesionModelo->validarUser($ses)) {
                        session_start();
                        $con = 0;
                        $_SESSION['usuario']=$ses->usuario;
                        $_SESSION['rol']=$persona->fk_rol;
                        $this->sesionModelo->intentos($ses, $con);
                        header('Location:?c=inicio&a=Principal&v='.$persona->unidad);
                    }elseif ($persona->fk_intento < 3 ) {
                            $con = $persona->fk_intento + 1;
                            $this->sesionModelo->intentos($ses, $con);
                                echo "<script type=''>
                                        alert('Error: Clave errada, Nro de intentos".$con.". A los tres intentos fallidos se bloqueará el usuario');window.location='./';
                                     </script>"; 
                    }elseif ($persona->fk_intento >= 3){
                            echo "<script type=''>
                                        alert('Usuario Bloqueado por intentos fallidos. Comuniquese con el administrador');window.location='./';
                                     </script>"; 
                    }
            }else{

                     echo "<script type=''>
                                        alert('Usuario Inactivo.Comuniquese con el administrador');window.location='./';
                                      </script>"; 
                }
        }else{

                 echo "<script type=''>
                                    alert('Usuario no existe.Comuniquese con el administrador');window.location='./';
                                  </script>"; 
            }
    }

}

 ?>