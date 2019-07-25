<div class="col-lg-8 offset-lg-2">
      <div class="card" style="padding: 25px;">
        <h4 id="frmTitulo">Editar alumno</h4>
        <!-- <form action="" method="POST"> -->
        <input type="hidden" id="id_alumno" value="<?php echo $alumno->id_alumno;?>">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombres">Nombres:</label>
              <input type="text" name="nombres" class="form-control" id="nombres" value="<?php echo $alumno->nombres;?>">
            </div>
            <div class="form-group col-md-6">
              <label for="apellidos">Apellidos:</label>
              <input type="text" name="apellidos" class="form-control" id="apellidos" value="<?php echo $alumno->apellidos;?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombres">Direccion:</label>
              <input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $alumno->direccion;?>">
            </div>
            <div class="form-group col-md-6">
              <label for="apellidos">Fecha de nacimiento:</label>
              <input type="date" name="fecha_nacimineto" class="form-control" id="fecha_nacimiento" value="<?php echo $alumno->fecha_nacimiento;?>">
            </div>
          </div>

          <!-- Botones -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <button id="btn" value="actualizar" class="form-control btn btn-success" >Guardar cambios</button>
            </div>
            <div class="form-group col-md-6">
              <a onclick="limpiar()" class="form-control btn btn-danger">Cancelar</a>
            </div>
          </div>

        <!-- </form> -->
      </div>
    </div>