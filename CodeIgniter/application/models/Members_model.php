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
        $q = $this->db->get('user');
        if ($q->num_rows > 0) {
            return $q->result();
        } else {
            return false;

        }
    }
	
	public function delete_user($id) 
	{
		$this->db->where('id',$id);
		$this->db->delete('user');
		redirect("index.php/leden");
	}
	
	public function edit_user($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('user',$data);
		
	}
	
	function show_user_id($data){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
}

	function update_user_id($id,$data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
	
	function addUser($data){
		$this->db->insert('user',$data);
	}
}