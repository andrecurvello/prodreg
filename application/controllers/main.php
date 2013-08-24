<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
	}
	
	public function index()
	{
		$this->load->view('home_page');
	}
	
	public function features(){
		$this->load->view('features');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */