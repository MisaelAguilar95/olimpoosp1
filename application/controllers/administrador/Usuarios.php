<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->library('componentes');
		$this->load->model("Usuarios_model");
	}

	public function index(){
		$data  = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(), 
		);
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view("usuarios\usuario_nuevo",$data);
		$this->load->view('footer');
		
	}

	public function add(){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(), 
		);
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view("admin/usuarios/add",$data);		
		$this->load->view('footer',$data);
		
		
	}

	public function store(){

		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$rol = $this->input->post("rol");

		$data  = array(
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'email' => $email,
			'username' => $username,
			'password' => sha1($password),
			'rol_id' => $rol,
			'estado' => "1"
		);

		if ($this->Usuarios_model->save($data)) {
			redirect(base_url()."usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."administrador/usuarios/add");
		}

		
	}

	public function view(){
		$idusuario = $this->input->post("idusuario");
		$data = array(
			"usuario" => $this->Usuarios_model->getUsuario($idusuario)
		);
		$this->load->view("admin/usuarios/view",$data);
	}

	public function edit($id){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(), 
			'usuario' => $this->Usuarios_model->getUsuario($id)
		);
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view('footer',$data);

}

	public function update(){
		$idusuario = $this->input->post("idusuario");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$email = $this->input->post("email");
		$username = $this->input->post("username");

		$rol = $this->input->post("rol");

		$data  = array(
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'email' => $email,
			'username' => $username,

			'rol_id' => $rol,
		);

		if ($this->Usuarios_model->update($idusuario,$data)) {
			redirect(base_url()."usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."administrador/usuarios/edit/".$idusuario);
		}

		
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Usuarios_model->update($id,$data);
		$data  = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(), 
		);
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view("usuarios\usuario_nuevo",$data);		
		$this->load->view('footer',$data);
		
	}

}