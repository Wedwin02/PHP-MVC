<?php require './views/headers.php';?>
<div class="col-md-8">
<div class="card">
            
            <div class="card-body">
                 <form action="<?php echo constant('URL')?>/nuevo/RegistarAlumno" method="POST">
                 <h1>Datos Alumnos</h1>
                 <div class="alert alert-danger" role="alert">
                        <?php echo $this->mensaje;?>
                    </div>
                     <input type="text"  name="txtID" hidden>
                    <div class = "form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" name="txtNombre"  placeholder="Ingresar Nombres" required>
                    </div>
                    <div class = "form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control" name="txtApellido"  placeholder="Ingresar Apellidos" required>
                    </div>
                    <div class = "form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" name="txtEmail"  placeholder="Ingresar Correo" required>
                    </div>
                    <div class = "form-group">
                    <label for="exampleInputEmail1">Nombre de Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario"  placeholder="Ingresar Usuario" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="txtPass"  placeholder="Ingresar Contraseña" required>
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-primary rounded-2">Crear</button>               
               
                    </div>
                    </form>

                   
             </div>
        </div>



</div>
<div class="col-md-4">
    <h1>hola</h1>
</div>

<?php require './views/footer.php';?>