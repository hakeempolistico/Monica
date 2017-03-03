<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }

 	public function accsetting() 
 	{	
 		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			$this->load->view('accsetting');
		}
		else{
			$this->load->view('login_v');
		}
 	
	}

	public function index()
	{
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['status'] = $this->post_model->get_post();
			$this->load->view('profile1', $this->data);
		}
		else{
			
			$this->load->view('login_v');
		}
	}
	public function aboutie()
	{ 

		$this->load->view('about');
	}

	public function teachie()
	{

		$this->load->view('index');
	}
		public function logout()
	{
		redirect('index.php/login_c/logout');
	}
	public function logoutconfirm()
	{
		$this->load->view('confirmlogout');
	}
	public function groups() {
		$this->load->view('group_v');
	}

	public function files() {
		$this->load->view('files_v');
	}

	public function friends() {
		$this->load->view('friends_v');
	}

	public function edit() {
		$this->load->view('editprof_v');
	}
	public function grpmembers() {
		$this->load->view('grpmembers_v');
	}

	public function grpfiles() {
		$this->load->view('grpfiles_v');
	}
	public function status(){
		$this->load->model('post_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->post_model->post_status($data);
			redirect('index.php/home/index');
		}
	}
}
