<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 //we need to start session in order to access it through CI

class Login_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load database
		$this->load->model('users_model');
		}

	// Show login page
	public function index() 
	{
	$this->load->view('login_v');
	}

	// Show registration page
	public function registermo() {
	$this->load->view('studentregister');
	}


	
	// Validate and store registration data in database
	public function register_validation() {

	// Check validation for user input in SignUp form
	$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
	$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
	$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
	$this->form_validation->set_rules('address', 'Address', 'trim|required');
	$this->form_validation->set_rules('e_address', 'Email', 'trim|required');
	$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
	$this->form_validation->set_rules('bday', 'Birthday', 'trim|required');
	if ($this->form_validation->run() == FALSE) {
	$this->load->view('studentregister');
	} else {
	$data = array(
	'username' => $this->input->post('username'),
	'password' => $this->input->post('password'),
	'fname' => $this->input->post('firstname'),
	'mname' => $this->input->post('mname'),
	'lname' => $this->input->post('lastname'),
	'gender' => $this->input->post('gender'),
	'address' => $this->input->post('address'),
	'emailadd' => $this->input->post('e_address'),
	'contact' => $this->input->post('contact'),
	'bday' => $this->input->post('bday'),

	);

	if($this->users_model->check_user_exists($data['username'])){
		$data['exist'] = "The username already exists";
		$this->load->view('studentregister', $data);
	}else{
		$result = $this->users_model->registration_insert($data);
	if ($result == TRUE) {
	echo 'Registration Successful!';
	$this->load->view('success', $data);
	} else {
	echo 'Username already exist!';
	$this->load->view('usernameexist', $data);
	}
	}
	}
	}

	// Check for user login process
	public function user_login_process() {

	$this->form_validation->set_rules('user.name', 'Username', 'trim|required|xss_clean');
	$this->form_validation->set_rules('pass.word', 'Password', 'trim|required|xss_clean');

	if ($this->form_validation->run() == FALSE) {
	if(isset($this->session->userdata['login2_v'])){
	$this->load->view('home');
	}else{
		echo 'ito naaa';
	$this->load->view('login2_v');
	}
	} else {
	$data = array(
	'username' => $this->input->post('user.name'),
	'password' => $this->input->post('pass.word')
	);
	$result = $this->users_model->login($data);
	if ($result == TRUE) {

	$username = $this->input->post('user.name');
	$result = $this->users_model->read_user_information($username);
	if ($result != false) {
	$session_data = array(
	'username' => $result[0]->username,
	'emailadd' => $result[0]->e_address,
	);
	// Add user data in session
	$this->session->set_userdata('login2_v', $session_data);
	$this->load->view('home');
	}
	} else {
	$data = array(
	'error_message' => 'Invalid Username or Password'
	);echo 'Invalid Username or Password';
	$this->load->view('login2_v', $data);
	}
	}
	}

	
 	 public function process(){

			if ($this->input->post())
		{
			$this->load->model('users_model');
			
			$data = $this->input->post();
			$this->users_model->login($data['username'], $data ['password']);
			
			$result=$this->users_model->login($data['username'], $data ['password']);
			
			if($result) {
				
				redirect('index.php/login_c/incorrect');
			}
			else {
				
				redirect ('index.php/home/');
			}
			
			echo $result;
			exit();
		}
		
		
	}

	// Logout from admin page
	public function logout() {

	// Removing session data
	$sess_array = array(
	'username' => ''
	);
	$this->session->unset_userdata('login2_v', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	$this->load->view('login2_v', $data);
	}

	public function iloginmo()
	{
		redirect('index.php/home/homie');
	}
	public function balikmo()
	{
		$this->load->view('login2_v');
	}
	public function incorrect()
	{
		$this->load->view('xlogin');
	}
	

}
