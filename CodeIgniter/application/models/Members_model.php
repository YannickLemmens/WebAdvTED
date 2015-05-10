<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members_model extends CI_Model {

    function get_members() {
        $query = $this->db->get('user');
		$this->table->set_heading('id','Naam', 'Email','Password');
		$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );
		$this->table->set_template($tmpl);
		echo $this->table->generate($query);
    }
}