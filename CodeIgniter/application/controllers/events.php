<?php
class events extends CI_Controller {
	
	function __construct(){
		parent::__construct();
			$this->load->model('event_model');

		$this->load->model('Members_model');
	
 	
}
	public function index () {		
		$this->load->helper('url');
		$data['events'] = $this->event_model->getEvents();
		$this->load->view('header');
		$this->load->view('events',$data);
		$this->load->view('footer');
		
	}
	
	public function addAnEvent() {
		$this->load->view('header');
		$this->load->view('add_Event_view');
		$this->load->view('footer');
		
	}
	
 
 function event() {
		$data['eventID'] = $this->uri->segment(3);
		$this->load->view('header');
		$this->load->view('event_admin',$data);
		$this->load->view('footer');
	}

	
	function delete_event_id() {
		$id = $this->uri->segment(3);
		$this->Members_model->delete_event($id);
		
}
	
	function edit_event() {
		$id = $this->uri->segment(3);
		$this->event_model->edit_event($id);
	}
	
	function show_event_id(){
		$id = $this->uri->segment(3);
		$data['events'] = $this->event_model->getEvents();
		$data['eventsUpdate'] = $this->event_model->show_event_id($id);
		$this->load->view('header');
		$this->load->view('event_edit_view',$data);
		$this->load->view('footer');
	}
	
	function update_event_id() {
		
		$id= $this->input->post('event_id');
		$data = array(
		'title' => $this->input->post('event_title'),
		'description' => $this->input->post('event_description'),
		'date' =>$this->input->post('event_date'),
		'location' => $this->input->post('event_location'),
		'xcoord' => $this->input->post('event_xcoord'),
		'ycoord'=> $this->input->post('event_ycoord'),
		);
		$this->event_model->update_event_id($id,$data);
		redirect("admin/getAllEvents");
	}
	
	function add_Event() {
		$data = array(
		'title' => $this->input->post('New_event_title'),
		'description' => $this->input->post('New_event_description'),
		'date' =>$this->input->post('New_event_date'),
		'location' => $this->input->post('New_event_location'),
		'xcoord' => $this->input->post('New_event_xcoord'),
		'ycoord'=> $this->input->post('New_event_ycoord'),
		);
		$this->event_model->addEvent($data);
		redirect("admin/getAllEvents");
	}
	
	function show_event_volledig() {
		$id = $this->uri->segment(3);
		$data['events'] = $this->event_model->getEvents();
		$data['eventVolledig'] = $this->event_model->show_event_id($id);
		$this->load->view('header');
		$this->load->view('events_volledig', $data);
		$this->load->view('footer');
	}
	function set_going() {
		$eventid= $this->uri->segment(3);
		$data = array(
		   'userid' => $this->session->userdata('user_id') ,
		   'eventid' => $eventid
		   
		);

		$this->db->insert('event_attenders', $data); 
		redirect("events/show_event_volledig/".$eventid);
	}
	function set_not_going() {
		$eventid= $this->uri->segment(3);

		$this->db->where('userid', $this->session->userdata('user_id') );
		$this->db->where('eventid', $eventid);
		$this->db->delete('event_attenders'); 
		redirect("events/show_event_volledig/".$eventid);
	}


	
	
	

}
