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
            <h3>Lista de Usuarios</h3>
            <div style="text-align: right;"><a href="?c=usuario&a=NuevoUsuario"><button class="btn btn-success" type="button"><i class="fa fa-user-plus " style="font-size:20px;color:#FFF"></i> Nuevo Usuario</button></a></div>
            <br>
            
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Estado del Usuario</th>
                    <th>Estado Cuenta</th>
                    <th style="width: 25%">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($datos['usuarios'] as $usuarios) : ?>
                <tr>
                  <td><?php echo $usuarios->usuario; ?></td>
                  <td><?php echo $usuarios->rol; ?></td>
                  <td><?php echo $usuarios->estado; ?></td>
                  <td><?php if( $usuarios->fk_intento==0){ echo "Cuenta Activa"; } else {
                   echo "Cuenta Bloqueada";
                  }?></td>
                  <td>
                    <!--Editar Usuario -->
                    <a href="?c=usuario&a=EditarUsuario&v=<?php echo $usuarios->id_usuario; ?>" ><i class="fa fa-user-edit " style="font-size:30px;color:#2196F3" ></i></a>
                    <!--ver Usuario -->
                     <a href="?c=usuario&a=VerUsuario&v=<?php echo $usuarios->id_usuario; ?>" ><i class="fa fa-id-card-alt " style="font-size:30px;color:#058baf" ></i></a>
                    <!--Resetear clave Usuario -->
                    <a href="?c=usuario&a=ResetearClaveUsuario&v=<?php echo $usuarios->id_usuario; ?>"><i class="fa fa-key " style="font-size:30px;color:#240a46"></i></a>
                    <!--Estado Activo/Inactivo del Usuario -->
                    <?php if( $usuarios->fk_estado==1){ ?>
                    <a href="?c=usuario&a=InhabilitarUsuario&v=<?php echo $usuarios->id_usuario; ?>"><i class="fa fa-unlock-alt" style="font-size:30px;color:#087c2f"></i></a>
                    <?php } else {?>
                    <a href="?c=usuario&a=InhabilitarUsuario&v=<?php echo $usuarios->id_usuario; ?>"><i class="fa fa-lock " style="font-size:30px;color:#e72f42"></i></a>
                  <?php }?>
                    <!--Bloqueado Usuario -->
                  <?php if( $usuarios->fk_intento==0){ ?>
                    <a href="?c=usuario&a=DesbloquearUsuario&v=<?php echo $usuarios->id_usuario; ?>"><i class="fa fa-user-check" style="font-size:30px;color:#087c2f"></i></a>
                  <?php } elseif( $usuarios->fk_intento==2) {?>
                  <a href="?c=usuario&a=DesbloquearUsuario&v=<?php echo $usuarios->id_usuario; ?>"><i class="fa fa-user-lock" style="font-size:30px;color:#ffb50c"></i></a>
                  <?php }elseif( $usuarios->fk_intento==3) {?>
                   <a href="?c=usuario&a=DesbloquearUsuario&v=<?php echo $usuarios->id_usuario; ?>"><i class="fa fa-user-lock" style="font-size:30px;color:#e72f42"></i></a>
                    <?php }?>
                  </td>
                </tr>
               <?php endforeach; ?>  
                </tbody>
              </table>
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
