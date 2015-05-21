<?php
class Forum extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model("Members_model");
	}
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('forum_view');
		$this->load->view('footer');

	}
	function categorie() {
		$data['catid'] = $this->uri->segment(3);
		$this->load->view('header');
		$this->load->view('forum_view',$data);
		$this->load->view('footer');
	}
	function newtopic() {
		$data['newtopic'] = true ;
		$this->load->view('header');
		$this->load->view('forum_view',$data);
		$this->load->view('footer');
		
	}
	function thread(){
		$data['thread'] = true ;
		$this->load->view('header');
		$this->load->view('forum_view',$data);
		$this->load->view('footer');

	}
	function newcategory(){
		$data['newcat'] = true ;
		$this->load->view('header');
		$this->load->view('forum_view',$data);
		$this->load->view('footer');

	}
	function nieuwtopic(){


    $query = $this->db->get_where('categories', array('id' => $this->input->post('category')),1);
	$membersonly = null;
    foreach ($query->result() as $row)
    	$membersonly = $row->membersonly;

  		$datum =  new DateTime('NOW');
		$data = array(
		'title' => $this->input->post('topicTitle'),
		'authorid' => $this->session->userdata('user_id'),
		'categorie' => $this->input->post('category'),
		'membersonly' => $membersonly,
		'timestamp' => time()
		);
		$this->db->insert('topics', $data); 
		$id = $this->db->insert_id();

		$data2 = array(
		'thread' => $id,
		'posterID' => $this->session->userdata('user_id'),
		'message' => $this->input->post('text'),
		'timestamp' => time()
		);
		$this->db->insert('posts', $data2); 
		redirect('/forum/thread/'.$id);
	}
	function createnewcat(){
		if($this->input->post('membersonly') == 'on')
		$membersonly = 1;
		else
			$membersonly = 0;
		$datum =  new DateTime('NOW');
		$data = array(
		'name' => $this->input->post('catname'),
		'description' => $this->input->post('catdesc'),
		'membersonly' => $membersonly
		);
		$this->db->insert('categories', $data); 
		$id = $this->db->insert_id();


		redirect('/forum/categorie/'.$id);
	}
	function newpost()
	{
		$data2 = array(
		'thread' => $this->input->post('topic'),
		'posterID' => $this->session->userdata('user_id'),
		'message' => $this->input->post('text'),
		'timestamp' => time()
		);
		$this->db->insert('posts', $data2); 
		redirect('/forum/thread/'.$this->input->post('topic'));


	}
	function newpostasguest()
	{
		$data2 = array(
		'thread' => $this->input->post('topic'),
		'posterID' => -1,
		'guestname' => $this->input->post('guestname'),
		'message' => $this->input->post('text'),
		'timestamp' => time()
		);
		$this->db->insert('posts', $data2); 
		redirect('/forum/thread/'.$this->input->post('topic'));


	}

}

