<?php
class login
{
	//Atributo para conexión a SGBD
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
  //Validamos en la BD si cumple con la condicion 
	public function validarUser(login $data){
             try 
        {
        	$estado=1;
            $stm = $this->pdo
                      ->prepare("SELECT * FROM tbl_usuario  WHERE usuario = ? and clave=? and fk_estado=? and fk_intento<?");
                      

            $stm->execute(array($data->usuario,$data->clave,$estado,$intentos=2));
              return $stm->fetchAll(PDO::FETCH_OBJ);
                }
                catch(Exception $e)
                {
                    die($e->getMessage());
                }
        }
        //Validamos en la BD si el usuario existe 
        public function ValidarExisUser(login $data){
             try 
        {
          
            $stm = $this->pdo
                      ->prepare("SELECT * FROM tbl_usuario  WHERE usuario = ? ");
                      

            $stm->execute(array($data->usuario));
              return $stm->fetchAll(PDO::FETCH_OBJ);
                }
                catch(Exception $e)
                {
                    die($e->getMessage());
                }
        }
       //Obtenemos de la BD los intentos del usuario
        	public function Obtenerintentos(login $data){
             try 
        {
        	
            $stm = $this->pdo
                      ->prepare("SELECT  * FROM tbl_usuario 
                            INNER JOIN tbl_rol ON tbl_usuario.fk_rol = tbl_rol.id_rol
                            INNER JOIN tbl_estado ON tbl_usuario.fk_estado = tbl_estado.id_estado WHERE usuario = ? ");
                      

            $stm->execute(array($data->usuario));
              return $stm->fetchAll(PDO::FETCH_OBJ);
                }
                catch(Exception $e)
                {
                    die($e->getMessage());
                }
        }

        //Actualizamos en la BD canda vez que haya un conteo de intentos y si no, que siga actualizando el intento en 0
        public function intentos(login $data, $con){

            try 
        {

          
          if ($con>0 and $con >= 3) {
              $sql = "UPDATE tbl_usuario SET 

                        fk_intento= ?
                    
                    WHERE usuario = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                    $con,
                    $data->usuario
                    )
                );
          } else {
          	
              $sql = "UPDATE tbl_usuario SET 

                        fk_intento= ?
                    
                    WHERE usuario = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                    $con,
                    $data->usuario
                    )
                );
          }
          
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }






}


?>