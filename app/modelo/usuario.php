<?php
class usuario{
	private $pdo;

//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
       public function obtenerUsuario(){
          
             try
                   {
                        $result = array();

                        $stm = $this->pdo->prepare("SELECT  * FROM tbl_usuario 
                            INNER JOIN tbl_rol ON tbl_usuario.fk_rol = tbl_rol.id_rol
                            INNER JOIN tbl_estado ON tbl_usuario.fk_estado = tbl_estado.id_estado
                            ");
                        $stm->execute();

                        return $stm->fetchAll(PDO::FETCH_OBJ);
                    }
                    catch(Exception $e)
                    {
                        die($e->getMessage());
                    }

        }
        public function obtenerUsuarioId($v){
          
            $stm = $this->pdo->prepare("SELECT  * FROM tbl_usuario 
                            INNER JOIN tbl_rol ON tbl_usuario.fk_rol = tbl_rol.id_rol
                            INNER JOIN tbl_estado ON tbl_usuario.fk_estado = tbl_estado.id_estado
                             WHERE id_usuario = ?");          
            $stm->execute(array($v));
            return $stm->fetch(PDO::FETCH_OBJ);
        } 
       
        public function ObtenerRol(){
          try
                   {
                        $result = array();

                        $stm = $this->pdo->prepare("SELECT  * FROM tbl_rol ");
                        $stm->execute();

                        return $stm->fetchAll(PDO::FETCH_OBJ);
                    }
                    catch(Exception $e)
                    {
                        die($e->getMessage());
                    }
        } 

        
        public function ObtenerEstado(){
          try
                   {
                        $result = array();

                        $stm = $this->pdo->prepare("SELECT  * FROM tbl_estado ");
                        $stm->execute();

                        return $stm->fetchAll(PDO::FETCH_OBJ);
                    }
                    catch(Exception $e)
                    {
                        die($e->getMessage());
                    }
        } 

         public function RegistrarUsuario(usuario $data){
            try {
            
                
                $sql2 = "INSERT INTO tbl_usuario (usuario,clave,fk_rol,fk_estado,fk_intento) 
                VALUES (?, ?, ?, ?, ?) ";
                $clave=md5($data->clave);
                        $this->pdo->prepare($sql2)
                             ->execute(
                                    array(
                  
                                        $data->usuario,
                                        $clave,
                                        $data->rol,
                                        $data->estado,
                                        $data->intento
                                        
                                        )
                                );
            
                    } catch (Exception $e) 
                    {
                        die($e->getMessage());
                    }
        }
        public function ActualizarUsuario($data)
            {
                try 
                {
                    

                    $sql2 = "UPDATE tbl_usuario SET 
                                
                               usuario = ?,
                               fk_rol = ?
                              
                                
                            WHERE id_usuario = ?";

                    $this->pdo->prepare($sql2)
                         ->execute(
                            array(
                            
                            $data->usuario,
                            $data->rol,
                            $data->id
                            
                            )
                        );

                } catch (Exception $e) 
                {
                    die($e->getMessage());
                }
            }
            public function Resetear($data)
            {
                try 
                {
                    $clave=md5($data->clave);
                    $sql = "UPDATE tbl_usuario SET 
                                
                                clave = ?

                            WHERE id_usuario = ?";

                    $this->pdo->prepare($sql)
                         ->execute(
                            array(
                            $clave,
                            $data->id
                            
                            
                            )
                        );

                    

                } catch (Exception $e) 
                {
                    die($e->getMessage());
                }
            }
            public function Inhabilitar($data)
            {
                try 
                {
                    $sql = "UPDATE tbl_usuario SET 
                                
                                fk_estado = ?

                            WHERE id_usuario = ?";

                    $this->pdo->prepare($sql)
                         ->execute(
                            array(
                            $data->estado,
                            $data->id
                            
                            
                            )
                        );

                    

                } catch (Exception $e) 
                {
                    die($e->getMessage());
                }
            }
            public function Desblok($data)
            {
                try 
                {
                    $sql = "UPDATE tbl_usuario SET 
                                
                                fk_intento = ?

                            WHERE id_usuario = ?";

                    $this->pdo->prepare($sql)
                         ->execute(
                            array(
                            $data->intento,
                            $data->id
                            
                            
                            )
                        );

                    

                } catch (Exception $e) 
                {
                    die($e->getMessage());
                }
            }
}

?>