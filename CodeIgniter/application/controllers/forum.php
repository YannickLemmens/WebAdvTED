<?php
class Forum extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('forum_header');
		$this->load->view('forum_view');
		$this->load->view('forum_footer');

	}
}