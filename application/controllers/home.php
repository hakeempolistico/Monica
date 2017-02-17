<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }


	public function index()
	{
		$this->load->view('home');
	}
	public function aboutie()
	{

		$this->load->view('about');
	}
	public function studie()
	{

		$this->load->view('profile');
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
}
