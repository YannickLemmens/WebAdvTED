<?php
class searchresult extends CI_Controller {
	
	public function index () {
		$this->load->model('event_model');
		$this->searchtemp();
		
		
	}
	public function searchtemp(){
		$this->load->helper(array('form'));
		$this->load->helper('url');
		$search = $this->input->post('searchBox');
		$data['query'] = $this->event_model->get_search($search);
		$this->load->view('header');
		$this->load->view('searchresult', $data);
		$this->load->view('footer');
	}
	
}
?>