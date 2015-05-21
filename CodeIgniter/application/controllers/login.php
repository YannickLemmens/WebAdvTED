<?php
class Login extends CI_Controller {
	
	public function __construct()
 	{
		parent::__construct();
		$this->load->model('Members_model');
	
 	}
	public function index () {
		$this->load->helper(array('form'));
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		
	}
	

	public function login(){

  if ($this->session->userdata('logged_in') == TRUE) 
            redirect('home');

		  $email=$this->input->post('email');
		  $password=md5($this->input->post('pass'));
		  $query = $this->user_exist($email);
  
  if ($query->num_rows() == 1) {
  foreach ($query->result() as $row) {

		if ($password != $row->password){
			$data ['login_fail'] = true;
			$this->load->helper('url');
			$this->load->view('header');
			$this->load->view('login',$data);
			$this->load->view('footer');
    } else {
			$data ['login_succes'] = true;
			$data = array(
			'user_id' => $row->id,
			 'user_email' => $row->email,
			 'user_name' => $row->username,
			 'role' => $row->role,
		   'image' => $row->image,
			 'logged_in' => TRUE
			 );                
			 $this->session->set_userdata($data);
			 redirect('home');
    	}
    }
                    }
                
 }
    public function user_exist($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        return $query;
    }

 public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('user_name'),
    'email'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password')),
	'role'=> "member"
  );
  $this->db->insert('user',$data);
 }     
    }

