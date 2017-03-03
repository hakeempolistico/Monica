<?php

class Post_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

public function get_post(){
	 	$this->db->from('status');
        $query = $this->db->get();
        return $query->result();
}
public function post_status($data){
$this->db->insert('status', $data);
}
}
	?>