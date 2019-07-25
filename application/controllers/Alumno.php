<?php
defined('BASEPATH') or exit('No direct script access allowed');

class alumno extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Alumno_Model');
	}


	public function index()
	{
		$this->load->view('alumno/index');
	}

	public function recargar()
	{
		$data = ['alumnos' => $this->Alumno_Model->findAll()];
		$this->load->view('alumno/tabla', $data);
	}


	public function findById($id_alumno)
	{
		$data = ['alumno' => $this->Alumno_Model->findById($id_alumno)];
		$this->load->view('alumno/form', $data);
	}

	public function delete($id_alumno)
	{
		$this->Alumno_Model->delete($id_alumno);
	}


	//Metodo para actualizar
	public function actualizar()
	{
		$data = ['nombres' => $_POST['nombres'], 'apellidos' => $_POST['apellidos'], 'direccion' => $_POST['direccion'], 'fecha_nacimiento' => $_POST['fecha_nacimiento'], 'id_alumno' => $_POST['id_alumno']];
		$this->UsuariosModel->update($data);
	}

	//Metodo para registrar
	public function ingresar()
	{
		$data = ['nombres' => $_POST['nombres'], 'apellidos' => $_POST['apellidos'], 'direccion' => $_POST['direccion'], 'fecha_nacimiento' => $_POST['fecha_nacimiento']];
		$this->UsuariosModel->insert($data);
	}
}
