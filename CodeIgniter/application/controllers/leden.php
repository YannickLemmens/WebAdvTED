<?php
class Leden extends CI_Controller {
	
	
	function index() {
		$this->load->model('Members_model');
		//$this->load->library('table');
        //$data['user'] = $this->Members_model->get_members();
		$data['user'] = $this->Members_model->get_users();
		$this->load->view('admin', $data);
    }
}