<?php
date_default_timezone_set('America/Mexico_City');
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('componentes');
		$this->load->model("Usuarios_model");
		$this->load->model("Clientes_model");
		// $nombre_usuario = $this->session->userdata('nombre');
		// if(!isset($nombre_usuario)){
		// 	header('Location: '.base_url().'login');
		// }
	}

	public function index(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);

		$this->load->view('observaciones');
		
		$this->load->view('footer',$data);
	}

	public function empleados(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('empleados/empleado_nuevo');		
		$this->load->view('footer',$data);
	}

	public function usuarios(){
		$data  = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(), 
		);
		$dato  = array(
			'roles' => $this->Usuarios_model->getRoles(), 
		);
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view("usuarios/add",$dato);
		$this->load->view("usuarios/usuario_nuevo",$data);		
		$this->load->view('footer',$data);		
		}
	

	public function configuraciones(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('configuraciones/configuraciones_view');
		$this->load->view('footer',$data);
		$this->load->view('configuraciones/configuraciones_js');
	}

	public function proveedores(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('proveedores/proveedor_nuevo');	
		$this->load->view('footer',$data);
	}

	public function clientes(){
	
		$data  = array(
			'clientes' => $this->Clientes_model->getClientes(), 
		);
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view("clientes/add");
		$this->load->view("clientes/cliente_nuevo",$data);	
			
		$this->load->view('footer',$data);	
	}

	public function pagos(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('pagos/pagos_nuevo');
		$this->load->view('footer',$data);
	}

	public function prestamos(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('prestamos/prestamo_nuevo');
		$this->load->view('footer',$data);
	}


	public function compras(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('compras/compra_nuevo');
		$this->load->view('compras/compra_js');
		$this->load->view('footer',$data);
	}

	public function ventas(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('ventas/venta_nuevo');
		$this->load->view('footer',$data);
		$this->load->view('ventas/ventas_js');
	}

	public function caja_chica(){
		$data['boton_minified'] = $this->componentes->boton_mini();
		$data['botones_conf'] = $this->componentes->botones_conf();
		$data['ajustes'] = $this->componentes->ajustes();
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('caja_chica/movimiento_nuevo');
		$this->load->view('footer',$data);
	}


}
