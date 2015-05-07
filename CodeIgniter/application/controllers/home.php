<?php
class home extends CI_Controller {
	public function index () {
		$this->load->view('home_view');
		$this->load->view('footer');
		$this->load->view('navbar');
	}
}