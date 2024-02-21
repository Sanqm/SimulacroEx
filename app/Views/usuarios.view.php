<div class="row">       
    <div class="col-12">
      <!--  <div class="alert alert-warning"><p>No está permitido darse de baja a uno mismo.</p></div>-->
    </div>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-6">
                    <h6 class="m-0 installfont-weight-bold text-primary">Usuarios del sistema</h6> 
                </div>
                <div class="col-6">
                    <div class="m-0 font-weight-bold justify-content-end">
                        <a href="/usuarios-sistema" class="btn btn-primary ml-1 float-right"> Nuevo Usuario del Sistema <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
                <div class="cols-6">
                    <label>Username
                        <input type="text" name="username">
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body" id="card_table">
                <div id="button_container" class="mb-3"></div>
                <!--<form action="./?sec=formulario" method="post">                   -->
                <table id="tabladatos" class="table table-striped">                    
                    <thead>
                        <tr>
                            <th>Username</th>                          
                            <th>Email</th>                            
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usu) { ?>
                            <tr>
                               <td><?php  echo $usu['username']?></td>
                               <td><?php  echo $usu['email']?></td>
                               <td><?php  echo $usu['nombre_rol']?></td>
                               <td>
                                <a href="/usuarios-sistema/view/<?php echo $usu['username']; ?>" class="btn btn-default ml-1"><i class="fas fa-eye"></i></a>                                
                                <a href="/usuarios-sistema/edit/<?php echo $usu['email']; ?>" class="btn btn-success ml-1"><i class="fas fa-edit"></i></a>
                                <a href="/usuarios-sistema/delete/<?php echo $usu['nombre_rol']; ?>" class="btn btn-danger ml-1"><i class="fas fa-trash"></i></a>
                            </td>
                            <?php }?>
                          <td>                                
                               
       
                    </tbody>
                    <tfoot>
                        Total de registros: 3                       
                    </tfoot>
                </table>
            </div>
        </div>
    </div>                        
