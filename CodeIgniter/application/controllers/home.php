<?php
class home extends CI_Controller {

	public function loginsucces()
	{

		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('home_view');
		$this->load->view('footer');
		print '<div class="alert alert-success" role="alert">login succesfull!</div>';

		
	}
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home_view');
		$this->load->view('footer');
		
	}
}