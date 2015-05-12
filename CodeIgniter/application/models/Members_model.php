<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members_model extends CI_Model {

    function get_members() {
        $query = $this->db->get('user');
		$this->table->set_heading('id','Naam', 'Email','Password');
		$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );
		$this->table->set_template($tmpl);
		echo $this->table->generate($query);
    }
	
	public function get_users() {
		return $this->db->get('user')->result();
	}
	
	public function get_user_info($id){
        $this->db->where('id' , $id);
        $q = $this->db->get('users');
        if ($q->num_rows > 0) {
            return $q->result();
        } else {
            return false;

        }
    }
}