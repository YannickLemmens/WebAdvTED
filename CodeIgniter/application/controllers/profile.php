<?php
class Profile extends CI_Controller {
	
	
	function index() {
		$this->load->model('Members_model');
		$this->load->view('header');
		$this->load->view('footer');
		$data['result'] = $this->Members_model->get_user_info($id);
		$this->load->view('profile_view',$data);
		
    }
}