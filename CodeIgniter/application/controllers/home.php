<?php
class home extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home_view');
		$this->load->view('footer');
		
	}
}