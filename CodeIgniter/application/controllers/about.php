<?php
class About extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('about_view');
		$this->load->view('footer');
	}
}