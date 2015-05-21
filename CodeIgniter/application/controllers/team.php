<?php
class Team extends CI_Controller {
	public function index () {
		$this->load->model('Members_model');
		$data['admins'] = $this->Members_model->get_admins();
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('team_view',$data);
		$this->load->view('footer');
		
	}
	

}
