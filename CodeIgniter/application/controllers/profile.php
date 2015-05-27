<?php
class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model('Members_model');
			$this->load->model('User_model');
}
	
	function index() {
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}
	function addAUser(){
		$this->load->view('header');
		$this->load->view('newUser');
		$this->load->view('footer');
    }
	
    function user() {
		$data['userid'] = $this->uri->segment(3);
		$data['image'] = $this->User_model->getImage($data['userid']);
		$this->load->view('header');
		$this->load->view('profile',$data);
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
		
		$this->load->view('header');
		$this->load->view('profile_view',$data);
		$this->load->view('footer');
	}
	
	function update_user_id() {
		
		$id= $this->input->post('did');
		$data = array(
		'username' => $this->input->post('dname'),
		'email' => $this->input->post('demail'),
		'role' =>$this->input->post('drole')
		);
		$this->Members_model->update_user_id($id,$data);
		redirect("admin/getAllUsers");
	}
	
	function User_Update() {
		$id= $this->uri->segment(3);
		$data = array(
		'username' => $this->input->post('EditUsername'),
		'email' => $this->input->post('EditEmail'),
		'role' => $this->input->post('EditRole')
		);
		$this->Members_model->update_user_id($id,$data);
		redirect("profile/user/".$id);
	}
	
	function addUser() {
		$data = array(
		'username' => $this->input->post('newUserName'),
		'email' => $this->input->post('newUserEmail'),
		'password'=> md5($this->input->post('newUserPassword')),
		'role'=>$this->input->post('newUserRole')
		);
		$this->Members_model->addUser($data);
		redirect("admin/getAllUsers");
	}

}