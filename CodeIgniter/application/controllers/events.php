<?php
class events extends CI_Controller {
	public function index () {
		$this->load->model('event_model');
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('events');
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
		$data['eventsUpdate'] = $this->event_model>show_event_id($id);
		$this->load->view('header');
		$this->load->view('event_admin',$data);
		$this->load->view('footer');
	}
	
	function update_user_id() {
		
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
		redirect("index.php/admin/getAllEvents");
	}
	
	
	
	

}
