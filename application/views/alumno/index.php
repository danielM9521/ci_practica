<?php
require 'application/views/header.php';
?>
<div class="container">

  <hr>
  <div class="row frm">
    <!-- <div class="frm"> -->
      <div class="col-lg-8 offset-lg-2">
        <div class="card" style="padding: 25px;">
          <h4 id="frmTitulo">Ingresar alumno</h4>
          <!-- <form action="" method="POST"> -->
          <input type="hidden" id="id_alumno">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombres">Nombres:</label>
              <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Ej. Juanito">
            </div>
            <div class="form-group col-md-6">
              <label for="apellidos">Apellidos:</label>
              <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ej. Martínez">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombres">Direccion:</label>
              <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ej. Av. Los naranjos">
            </div>
            <div class="form-group col-md-6">
              <label for="apellidos">Fecha de nacimiento:</label>
              <input type="date" name="fecha_nacimineto" class="form-control" id="fecha_nacimiento" placeholder="dd/mm/aaaa">
            </div>
          </div>

          <!-- Botones -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <button id="btn" value="registrar" class="form-control btn btn-success">Registrar</button>
            </div>
            <div class="form-group col-md-6">
              <a class="form-control btn btn-danger">Cancelar</a>
            </div>
          </div>
          <!-- </form> -->
        </div>
      <!-- </div> -->
    </div>
  </div>

  <br>
  <hr>
  <div class="row">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID Alumno</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha de nacimiento</th>
            <th colspan="2" style="text-align: center;">Acciones</th>
          </tr>
        </thead>

        <tbody id="tblCuerpo">

        </tbody>

      </table>
    </div>
  </div>
</div>
<?php
require 'application/views/footer.php';
?>
</body>

</html>