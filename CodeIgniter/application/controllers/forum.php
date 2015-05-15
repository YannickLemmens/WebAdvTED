<?php
class Forum extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('forum_view');
		$this->load->view('footer');

	}
	function categorie() {
		$data['catid'] = $this->uri->segment(3);
		$this->load->view('header');
		$this->load->view('forum_view',$data);
		$this->load->view('footer');
	}
	function newtopic() {
		$data['newtopic'] = true ;
		$this->load->view('header');
		$this->load->view('forum_view',$data);
		$this->load->view('footer');
	}
}