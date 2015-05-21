<?php
class Register extends CI_Controller {
		public function __construct()
 	{
		parent::__construct();
		$this->load->model('Members_model');
	
 	}
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
		
	}
}