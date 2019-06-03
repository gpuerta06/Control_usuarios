
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
            
        <h3 style="color: #af0521;">Ficha Usuario</h3>
        <br>
              <div class="row">
                  <div class="col-md-3">
                   <div class="form-group">
                      <h4>Usuario</h4>
         
                      <?php echo $datos['usuario']; ?>
                    </div>
                    </div>   
                   
                    <div class="col-md-3">
                   <div class="form-group">
                      <h4>Rol</h4>
        
                      <?php echo $datos['rol']; ?>
                    </div>
                    </div>
                    <div class="col-md-3">
                   <div class="form-group">
                      <h4>Estado</h4>
               
                       <?php echo $datos['estado']; ?>
                    </div>
                    </div>
               </div>   
               <div class="modal-footer">
              <div class="pull-right"> 
                  <a href="?c=usuario&a=inicio"><input type="button" name="" value="Volver"  class="btn btn-primary "> </a>  
              </div>
             
            </div>   
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


