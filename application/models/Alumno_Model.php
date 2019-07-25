<?php

class Alumno_Model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function findAll()
  {
    return $this->db->get('alumno')->result();
  }

  public function findById($id_alumno)
  {
    //con row se recorre la consulta
    return $this->db->query("SELECT * FROM alumno WHERE id_alumno=$id_alumno")->row();
  }

  public function delete($id_alumno)
  {
    $result = $this->db->query("DELETE FROM alumno WHERE id_alumno = $id_alumno");
    if ($result) {
      return "Registro eliminado correctamente";
    } else {
      return "Registro no eliminado";
    }
  }

  public function update($data)
  {
    $sql = "UPDATE alumno SET nombres = ? , apellidos = ? , direccion = ? , fecha_nacimiento = ? WHERE id_alumno = ? ";
    $result = $this->db->query($sql, $data);
    if ($result) {
      return "Registro actualizado correctamente";
    } else {
      return "Registro no actualizado";
    }
  }


  public function insert($datos)
  {
    $sql = "INSERT INTO alumno (nombres, apellidos, direccion, fecha_nacimiento) VALUES (?,?,?,?)";
    $result = $this->db->query($sql, $datos);
    if ($result) {
      return "Registro agregado correctamente";
    } else {
      return "Registro no agregado";
    }
  }
}
