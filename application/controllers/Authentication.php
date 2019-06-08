<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
    function __construct(){
        parent::__construct();  
        $this->load->helper('url');
        $this->load->library('session');
    }
    
    public function DoSignin(){
        $user =  $this->input->post('user');
        $password =  $this->input->post('password');
        
        $result = array("result" => "success");
        if(empty($user) || empty($password)){
            $result = array("result" => "error", "message" => "Todos los campos son obligatorios!");
            echo json_encode($result);
        }else{
            if(strlen($password) < 8) {
                $result = array("result" => "error", "message" => "La contraseña debe tener al menos 8 caracteres.");
                echo json_encode($result);
                return;
            }

            $this->load->model('User_model', 'user', true);
            
            $this->user->add_user($user, md5($password));
            $user_id = $this->user->get_last_user_id();
            
            echo json_encode($result);
        }
    }
    
    public function DoLogin(){
		$this->load->library('session');
 
		$result = array('error' => false);
 
		$user = $_POST['user'];
		$password = $_POST['password'];
        
        $this->load->model('User_model', 'user', true);
		$data = $this->user->login($user, $password);
 
		if($data){
			$this->session->set_userdata('user', $data);
			$output['message'] = 'Iniciando sesión, por favor espere...';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Inicio de sesión invalido. Usuario no encontrado';
		}
 
		echo json_encode($output); 
    }
    
    public function DoLogOut(){
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
}
