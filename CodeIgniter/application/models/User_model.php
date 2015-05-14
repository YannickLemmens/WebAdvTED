<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function login($email,$password)
 {
  #is gebruiker al ingelogd?
  if ($this->session->userdata('logged_in') == TRUE) 
            redirect('/home');

  $this->db->where("email",$email);
  $this->db->where("password",$password);
  $query=$this->db->get("user");
  
  if($query->num_rows()>0)
  {
    foreach($query->result() as $rows)
    {
      $newdata = array(
        'user_id'  => $rows->id,
        'user_name'  => $rows->username,
        'user_email'    => $rows->email,
		'role' => $rows ->role,
        'logged_in'  => TRUE,
      );
    }
    $this->session->set_userdata($newdata);
    $this->load->view('home',$newdata);
  }
 
  $this->load->view('login');
 }
 public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('user_name'),
    'email'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password'))
	);
  $this->db->insert('user',$data);
 }
}
?>