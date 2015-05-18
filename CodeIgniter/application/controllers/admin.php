<?php
class admin extends CI_Controller {
	public function __construct()
 {
		parent::__construct();
		$this->load->model('Members_model');
		$this->load->model('event_model');
 }
	
	function index() {
		if($this->session->userdata('role') == "Admin"){
		$data['dashboard'] = "active";
		$data['userview'] = "";
		$this->load->view('header');
		$this->load->view('Admin_view');
		$this->load->view('footer');
		} else {
			redirect("index.php/login");
		}
    }
	
	function getAllUsers() {
		$data['user'] = $this->Members_model->get_users();
		$data['dashboard']="";
		$data['userview'] = "active";
		$this->load->view('header');
		$this->load->view('editUsers', $data);
		$this->load->view('footer');
	}
	
	function getAllEvents() {
		$data['events'] = $this->event_model->getEvents();
		$this->load->view('header');
		$this->load->view('event_admin',$data);
		$this->load->view('footer');
	}
}