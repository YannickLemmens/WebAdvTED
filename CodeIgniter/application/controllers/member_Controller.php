<?php
class member_Controller extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('navbar');
		$this->load->view('register');
		$this->load->view('footer');
		
	}
}