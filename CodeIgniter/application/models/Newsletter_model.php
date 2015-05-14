<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter_model extends CI_Model {
	
	function addEmail ($data) {
		$this->db->insert('newsletter',$data);
		redirect($_SERVER['HTTP_REFERER']);
    }
	}
