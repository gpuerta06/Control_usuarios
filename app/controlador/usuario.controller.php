<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once 'app/modelo/usuario.php';

class UsuarioController{

 private $modelo;

//Creación del modelo
    public function __CONSTRUCT(){
        session_start();
        $this->usuarioModelo = new usuario();
    }

//Inicio
    public function Inicio(){
        $usuarios = new Usuario();     

              $usuarios= $this->usuarioModelo->obtenerUsuario($usuarios);
                    $datos = [
                'usuarios' => $usuarios
                            ];
        require_once 'app/vista/inc/header.php';
        require_once 'app/vista/usuario/inicio.php';
        require_once 'app/vista/inc/footer.php';
    }
//Nuevo Usuario
    public function NuevoUsuario(){
        
        require_once 'app/vista/inc/header.php';
        require_once 'app/vista/usuario/nuevousuario.php';
        require_once 'app/vista/inc/footer.php';
           
    }
        
         
    public function Guardar(){
            $usuario = new usuario();     
   
    //datos Usuario
            $usuario->usuario = $_REQUEST['usuario'];
            $usuario->rol = $_REQUEST['rol'];
            $usuario->clave = $_REQUEST['clave'];
            $usuario->estado = $_REQUEST['estado'];
            $usuario->intento = $_REQUEST['intento'];
            
        if ($this->usuarioModelo->RegistrarUsuario($usuario)) {
                echo "<script type=''>
                        alert('Guardado con éxito');window.location='?c=usuario&a=inicio';
                      </script>";    
        } else {
                echo "<script type=''>
                        alert('Guardado con éxito');window.location='?c=usuario&a=inicio';
                      </script>"; 
              }      
    }

//Editar Usuario 
    public function EditarUsuario(){
           
        $usu = $this->usuarioModelo->obtenerUsuarioId($_REQUEST['v']);
       
        $datos = [ 
                    
                    'usuario' => $usu->usuario,
                    'fk_rol' => $usu->fk_rol,
                    'rol' => $usu->rol,
                    'id_rol' => $usu->id_rol,
                    'id_usuario' => $usu->id_usuario
                                                        
                 ];
                          
        require_once 'app/vista/inc/header.php';
        require_once 'app/vista/usuario/editarusuario.php';
        require_once 'app/vista/inc/footer.php';
    }

    public function Modificar(){
                $usuario = new usuario();
    
    //datos Usuario
            $usuario->usuario = $_REQUEST['usuario'];
            $usuario->rol = $_REQUEST['rol'];
            $usuario->id = $_REQUEST['id'];
                
                $this->usuarioModelo->ActualizarUsuario($usuario);
                    
                header('Location:?c=usuario&a=inicio');
    }

    //Ver Usuario 
    public function VerUsuario(){
           
        $usu = $this->usuarioModelo->obtenerUsuarioId($_REQUEST['v']);
       
        $datos = [ 
                    
                    'usuario' => $usu->usuario,
                    'estado' => $usu->estado,
                    'fk_rol' => $usu->fk_rol,
                    'rol' => $usu->rol,
                    'id_rol' => $usu->id_rol,
                    'id_usuario' => $usu->id_usuario
                                                        
                 ];
                          
        require_once 'app/vista/inc/header.php';
        require_once 'app/vista/usuario/verusuario.php';
        require_once 'app/vista/inc/footer.php';
    }
    //Resetear clave Usuario 
    public function ResetearClaveUsuario(){
           
        $usu = $this->usuarioModelo->obtenerUsuarioId($_REQUEST['v']);
       
        $datos = [ 
                    'usuario' => $usu->usuario,
                    'fk_rol' => $usu->fk_rol,
                    'rol' => $usu->rol,
                    'id_rol' => $usu->id_rol,
                    'id_usuario' => $usu->id_usuario
                                                        
                 ];
                          
        require_once 'app/vista/inc/header.php';
        require_once 'app/vista/usuario/resetearclaveusuario.php';
        require_once 'app/vista/inc/footer.php';
    }
    public function ResetearClave(){
                $usu = new usuario();
                
                $usu->id = $_REQUEST['id'];
                $usu->clave = $_REQUEST['clave'];
               
                
                $this->usuarioModelo->Resetear($usu);
                    
                header('Location:?c=usuario&a=inicio');
    }
//Inhabilitar/habilitar Usuario 
    public function InhabilitarUsuario(){
           
        $usu = $this->usuarioModelo->obtenerUsuarioId($_REQUEST['v']);
       
        $datos = [ 
                    'usuario' => $usu->usuario,
                    'fk_rol' => $usu->fk_rol,
                    'rol' => $usu->rol,
                    'id_rol' => $usu->id_rol,
                    'id_usuario' => $usu->id_usuario
                                                        
                 ];
             require_once 'app/vista/inc/header.php';
             require_once 'app/vista/usuario/inhabilitarusuario.php';
             require_once 'app/vista/inc/footer.php';
    }
        

    public function Inhabilita(){
                $usu = new usuario();
                
                $usu->id = $_REQUEST['id'];
                $usu->estado = $_REQUEST['estado'];
               
                
                $this->usuarioModelo->Inhabilitar($usu);
                    
                header('Location:?c=usuario&a=inicio');
    }
//Desbloquear Usuario 
    public function DesbloquearUsuario(){
           
        $usu = $this->usuarioModelo->obtenerUsuarioId($_REQUEST['v']);
       
        $datos = [ 
                    'usuario' => $usu->usuario,
                    'fk_rol' => $usu->fk_rol,
                    'rol' => $usu->rol,
                    'id_rol' => $usu->id_rol,
                    'id_usuario' => $usu->id_usuario
                                                        
                 ];
             require_once 'app/vista/inc/header.php';
             require_once 'app/vista/usuario/desbloquearusuario.php';
             require_once 'app/vista/inc/footer.php';
    }
        

    public function Desbloquear(){
                $usu = new usuario();
                
                $usu->id = $_REQUEST['id'];
                $usu->intento = $_REQUEST['intento'];
               
                
                $this->usuarioModelo->Desblok($usu);
                    
                header('Location:?c=usuario&a=inicio');
    }




    
}
?>