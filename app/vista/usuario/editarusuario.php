
<?php if($_SESSION['rol']==1 ) { ?>
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Usuarios</h1>
          <p>Control de Usuarios</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            
      <form autocomplete="off" action="?c=usuario&a=Modificar" method="post">
       
        <h3>Editar Usuario</h3>
              <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                      <label class="control-label">Usuario</label>
                      <input class="form-control" type="text" name="usuario" value="<?php echo $datos['usuario']; ?>" required="">
                    </div>
                    </div>   
                   
                            
                    <div class="col-md-6">
                   <div class="form-group">
                      <label class="control-label">Rol</label>
                      <select name="rol" class="form-control" required="">
                         <?php foreach($this->usuarioModelo->ObtenerRol() as $r): ?>
                        <option <?php echo $datos['fk_rol'] == $r->id_rol ? 'selected' : ''; ?> value="<?php echo $r->id_rol; ?>"><?php echo $r->rol; ?></option> 
                        <?php endforeach; ?>
                      </select>
                    </div>
                    </div>
                   
                    
                </div>
                <!--Campos Ocultos -->
            <input class="form-control" type="hidden" value="<?php echo $datos['id_usuario']; ?>" name="id">
                   
            <div class="modal-footer">
              <div class="pull-right"> 
                  <a href="?c=usuario&a=inicio"><input type="button" name="" value="Cancelar"  class="btn btn-primary "> </a>  
              </div>
              <div class="pull-left"> 
                  <input type="submit" class="btn btn-primary" name="Buscar" value="Aceptar">
              </div>
            </div>
          </div>
</form>
          </div>
        </div>
      </div>
    </main>
<?php }else{
      ?>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
             <h3>
                No tiene permiso para este módulo. Comuniquese con el administrador
              </h3>
              

            </div>
           
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
      <?php
     } ?>
