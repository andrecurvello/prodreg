<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		
		if ( !$this->tank_auth->is_logged_in() ) 		// if the user is not logged in, send to login
		{
			redirect('/login/');
		} 
	}
	
	
	public function index()
	{
		$this->home();
	}
	 
	public function home()
	{
			$data['username'] = $this->tank_auth->get_username();
			$data['userid'] = $this->tank_auth->get_user_id();	
			
			$data['devices'] = $this->db->get_where('test_devices',array('id <'=>5))->result_array();
			$this->load->view('user/home',$data);
		
	}
	
	public function about()
	{
		echo "Who";
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */