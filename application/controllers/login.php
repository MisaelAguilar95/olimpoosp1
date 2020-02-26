<?php
date_default_timezone_set('America/Mexico_City');
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('Api_model','AM',true);
	}

    //funcion solo para validar a donde ira el usuario
	public function index(){
        $nombre_usuario = $this->session->userdata('nombre');
        if(!isset($nombre_usuario)){
            $this->load->view('login');
            $this->load->view('login_js');
        }
        else{
            header("Location: ".base_url().'inicio');
        }
    }
    
    //funcion para validar datos y crear session
    public function valida(){
        if(isset($_GET['consulta'])){
            $arraydata = array(
                'nombre'  => $_POST['nombre'],
                'email'     => $_POST['email'],
                'ip' => $this->get_ip(),
                'fecha_acceso' => date('Y-m-d h:i:s'),
                'rol' => 'Consulta'
            );
            if($this->AM->guardar_varios('accesos_externos',$arraydata)){
                $this->session->set_userdata($arraydata);
                header("Location: ".base_url().'inicio');
            }
        }
        else{
            $usuario = $_POST['usuario'];
            $password = md5($_POST['password']);
            $result = json_decode($this->AM->consulta_condicionada('vw_usuarios','usuario="'.$usuario.'" AND password="'.$password.'" AND activo = 1 '));
            if(count($result) == 1){
                echo "hay resultado";
                $arraydata = array(
                    'nombre'  => $result[0]->nombre,
                    'email'     => $result[0]->email,
                    'ip' => $this->get_ip(),
                    'fecha_acceso' => date('Y-m-d h:i:s'),
                    'rol' => $result[0]->rol
                );
                
                $array_acceso = array(
                    'ip' => $this->get_ip(),
                    'fecha_acceso' => date('Y-m-d h:i:s'),
                    'usuario_id' => $result[0]->id
                );
                
                if($this->AM->guardar_varios('accesos',$array_acceso)){
                    $this->session->set_userdata($arraydata);
                    header("Location: ".base_url().'inicio');
                }
            }
            else{
                header("Location: ".base_url().'?error=1');
            }
        }
    }

    //funcion para obtener ip del usuario
    private function get_ip(){
        $ip = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    //funcion para destruir la sesion
    public function salir(){
        $this->session->sess_destroy();
        header("Location: ".base_url());
    }
}
