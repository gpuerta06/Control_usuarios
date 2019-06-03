
<?php if($_SESSION['rol']==1 ) { ?>

 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Usuarios</h1>
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
            <h3>Resetear Calve Usuario</h3>
      <form autocomplete="off" action="?c=usuario&a=ResetearClave" method="post">
              <div class="row">
                         
                    <div class="col-md-6">
                   <div class="form-group">
                      ¿Desea resetear la clave del usuario:<strong> <?php echo $datos['usuario']; ?></strong>?
                      
                    </div>
                    </div>
                    
                </div>
 <input class="form-control" type="hidden" value="<?php echo $datos['id_usuario']; ?>" name="id">
 <input class="form-control" type="hidden" value="123" name="clave">
                   
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


