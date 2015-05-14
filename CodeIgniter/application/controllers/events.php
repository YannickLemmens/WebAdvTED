<?php
class events extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');
		
	}

}
