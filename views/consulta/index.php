<?php require './views/headers.php';?>
<div class="col-md-12">

    <table class="table table-bordered">
     <h2>Lista de alumnos</h2>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
            </tr>
        </thead>
        <tbody>
           <?php
           include_once 'models/alumno.php';
                    foreach ($this->alumnos as $row) { 
                        # code...
                        $alumno = new Alumno();
                        $alumno = $row;
                    
           
           ?><tr>
                     <td> <?php echo $alumno->id ?></td>
                     <td> <?php echo $alumno->nombre ?></td>
                     <td> <?php echo $alumno->apellido ?></td>
                     <td> <?php echo $alumno->email ?></td>
                     <td> <?php echo $alumno->usuario ?></td>
                     <td> <?php echo $alumno->pass ?></td>
                     <td>
                         <a href="" class="btn btn-warning">Editar</a>
                         <a href="" class="btn btn-danger">Eliminar</a>
                     </td>

           </tr>
                     
                     
             <?php } ?>
        </tbody>
    </table>
</div>


<?php require './views/footer.php';?>