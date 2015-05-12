<?php
class Login extends CI_Controller {
	
	public function index () {
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		
	}
	
	public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('home');
        }        
    }
}