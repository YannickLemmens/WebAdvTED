<?php
class admin extends CI_Controller {
	public function __construct()
 {
		parent::__construct();
		$this->load->model('Members_model');
 }
	
	function index() {
		if($this->session->userdata('role') == 1){
		$this->load->view('admin_header');
		$this->load->view('Admin_view');
		} else {
			redirect("index.php/login");
		}
    }
	
	function getAllUsers() {
		$data['user'] = $this->Members_model->get_users();
		$this->load->view('admin_header');
		$this->load->view('editUsers', $data);
	}
}