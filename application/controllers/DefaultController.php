<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultController extends CI_Controller {
	function __construct(){
        parent::__construct();  
        $this->load->helper('url');
        $this->load->library('session');
	}
	
	public function index()
	{
		$this->load->model('Views_model', 'views', true);
		$this->views->add_view();
		
		$quantity_views = $this->views->get_quantity_views();
		
		$this->load->library('session');
		$data = array('quantity_views' => $quantity_views);
		$this->load->view('home', $data);
	}
	
	public function SchoolInfo()
	{
		$this->load->library('session');
		$this->load->view('school_info');
	}

	public function Locations()
	{
		$this->load->library('session');
		$this->load->view('locations');
	}

	public function Contact()
	{
		$this->load->library('session');
		$this->load->view('contact');
	}
	
	public function Login()
	{
		$this->load->library('session');
		$this->load->view('login');
	}
	
	public function Signin()
	{
		$this->load->library('session');
		$this->load->view('signin');
	}
	
}
