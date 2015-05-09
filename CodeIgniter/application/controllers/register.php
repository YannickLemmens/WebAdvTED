<?php
class register extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
		
	}
}