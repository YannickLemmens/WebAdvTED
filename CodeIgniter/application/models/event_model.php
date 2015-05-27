<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class event_model extends CI_Model {
 
public function getEvents() {
	return $this->db->get('events')->result();
}
 

	public function get_event_info($id){
        $this->db->where('ID' , $id);
        $q = $this->db->get('events');
        if ($q->num_rows > 0) {
            return $q->result();
        } else {
            return false;

        }
    }
	
	public function delete_event($id) 
	{
		$this->db->where('ID',$id);
		$this->db->delete('events');
		redirect("index.php/admin/getallevents");
	}
	
	public function edit_event($id,$data)
	{
		$this->db->where('ID',$id);
		$this->db->update('events',$data);
		
	}
	
	function show_event_id($data){
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('ID', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
}

	function update_event_id($id,$data){
		$this->db->where('ID', $id);
		$this->db->update('events', $data);
	}
	
	function addEvent($data)
	{
		$this->db->insert('events',$data);
	}
	public function get_search($search)
	{
 		$this->db->select('*');
		$this->db->from('events');
		$this->db->like('title',$search);
		$this->db->or_like('description',$search);
		$query = $this->db->get();
		return $query->result_array();
	}
}
