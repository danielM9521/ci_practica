<?php foreach ($alumnos as $alumno) : ?>
  <tr>
    <td><?php echo $alumno->nombres; ?></td>
    <td><?php echo $alumno->apellidos; ?></td>
    <td><?php echo $alumno->direccion; ?></td>
    <td><?php echo $alumno->fecha_nacimiento; ?></td>
    <td style="text-align: center;"><button class="btn btnEditar btn-warning" value="<?= $alumno->id_alumno; ?>">Editar</button></td>
    <td style="text-align: center;"><button class="btn btnEliminar btn-danger" value="<?= $alumno->id_alumno; ?>">Eliminar</button></td>
  </tr>
<?php endforeach; ?>