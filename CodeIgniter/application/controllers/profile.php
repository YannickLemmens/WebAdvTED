<?php
class Profile extends CI_Controller {
	
	
	function index() {
		$this->load->model('Members_model');
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('profile_view');
		
    }
	
	function delete_user_id() {
		$this->load->model('Members_model');
		$id = $this->uri->segment(3);
		$this->Members_model->delete_user($id);
		
}


}