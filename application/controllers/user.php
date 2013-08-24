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
			$data['my_devices'] = array();
			
			$user_device_rows = $this->db->
								select('device_id, date_purchased')->
								get_where( 'pr_user_devices', array('userid'=>$this->tank_auth->get_user_id()) )->
								result_array();
								
			
			
			foreach ($user_device_rows as $device){
					
				$user_device = $this->db->select('name, description, image, warranty_in_days')->
										  from('pr_devices')->
										  where( array('id'=>$device['device_id']) )->
										  get()->result_array();
				unset($device['device_id']);
				$data['my_devices'] []= array_merge($user_device[0],$device);
			}
			
			$data['available_devices'] = $this->db->
											select('id, name')->
											from('pr_devices')->
											get()->result_array();
											
			$this->load->view('user/home',$data);
		
	}
	
	public function POST_add_device()
	{
		
		$this->form_validation->set_rules('device', 'Device Names', 'required');
		$this->form_validation->set_rules('purchase-date', 'Purchase Date', 'required|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			// Send back to home page and display error
		}
		else
		{
			$date_purchased = date('Y-m-d', strtotime($_POST['purchase-date']) );
			// Add provided device_id to user
			$new_device = array(
								'userid'=>$this->tank_auth->get_user_id(),
								'device_id'=>$_POST['device'],
								'date_purchased'=>$date_purchased
								);
								
			$this->db->insert('pr_user_devices', $new_device);
			echo "added your new device"; 
			// Send back to home page and display success
		}
		
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */