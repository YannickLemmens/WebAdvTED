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
 public function getName($id){
 	$username = null;
 	$query = $this->db->get_where('user', array('id' => $id), 1);
    foreach ($query->result() as $row)
    	$username = $row->username;
    
 	return $username;
 }
 public function getimage($id){
 	$image = null;
 	$query = $this->db->get_where('user', array('id' => $id), 1);
    foreach ($query->result() as $row)
    	$image = $row->image;
    
 	return $image;
 }
 public function add_user()
 {
	 $this->db->where('username',$this->input->post('user_name'));
	 $query = $this->db->get('user');
	 if ($query->num_rows() > 0)
		{
			$data = array ('error' => "Username is in gebruik, gelieve een andere username te kiezen.");
			$this->load->view('header');
			$this->load->view('register',$data);
			$this->load->view('footer');
		} else {
				$this->db->where('email',$this->input->post('email_address'));
				$query2 = $this->db->get('user');
				if ($query2 -> num_rows() > 0)
				{
					$data = array('error' => "Emailadres is al in gebruik, gelieve een ander emailadres op te geven");
					$this->load->view('header');
					$this->load->view('register',$data);
					$this->load->view('footer');
				}
			$data=array(
				'username'=>$this->input->post('user_name'),
				'email'=>$this->input->post('email_address'),
				'password'=>md5($this->input->post('password'))
				);
			  $this->db->insert('user',$data);
			  $this->load->view('header');
			  $this->load->view('thank',$data);
			  $this->load->view('footer');
			
		}
 }
}
?>