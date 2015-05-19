<?php
class events_volledig extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('events_volledig');
		$this->load->view('footer');
		
	}
	

}