<?php
class events_volledig extends CI_Controller {
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('events_volledig');
		$this->load->view('footer');
		
	}
	function show_event_volledig() {
		$id = $this->uri->segment(3);
		$data['events'] = $this->event_model->getEvents();
		$data['eventVolledig'] = $this->event_model->show_event_id($id);
		$this->load->view('header');
		$this->load->view('events_volledig', $data);
		$this->load->view('footer');
	}

}