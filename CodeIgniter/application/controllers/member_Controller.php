<?php
class member_Controller extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('navbar');
		$this->load->view('lid_worden');
		$this->load->view('footer');
		
	}
}