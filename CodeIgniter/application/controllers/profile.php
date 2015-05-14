<?php
class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model('Members_model');
}
	
	function index() {
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
		
		
    }
	
	function delete_user_id() {
		$id = $this->uri->segment(3);
		$this->Members_model->delete_user($id);
		
}
	
	function edit_user() {
		$id = $this->uri->segment(3);
		$this->Members_model->edit_user($id);
	}
	
	function show_user_id(	){
		$id = $this->uri->segment(3);
		$data['users'] = $this->Members_model->get_users();
		$data['userUpdate'] = $this->Members_model->show_user_id($id);
		$this->load->view('profile_view',$data);
	}
	
	function update_user_id() {
		
		$id= $this->input->post('did');
		$data = array(
		'username' => $this->input->post('dname'),
		'email' => $this->input->post('demail'),
		'role' =>$this->input->post('drole')
		);
		$this->Members_model->update_user_id($id,$data);
		redirect("index.php/admin/getAllUsers");
	}


}