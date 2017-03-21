<?php

class notifs_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

public function getdetails(){
	$id = $this->session->userdata('idnumber');
	$this->db->from('notifs');
	$this->db->join('users', 'notifs.idnumber=users.idnumber');
	$this->db->where('notifs.to_whom', $id);
	$this->db->where('notifs.idnumber !=', $id);
	$this->db->order_by('datetime', 'DESC');
	$query = $this->db->get();
	return $query->result();
}


public function getdetails2($commented){
	$id = $this->session->userdata('idnumber');
	$this->db->from('notifs');
	$this->db->join('users', 'notifs.idnumber=users.idnumber');
	$this->db->join('status', 'notifs.stat_id=status.stat_id');
	$this->db->join('comments', 'status.stat_id=comments.status_id' );
	$this->db->where('notifs.stat_id', $commented);
	$this->db->order_by('status.stat_id', 'DESC');
	$query = $this->db->get();
	return $query->result();

}

function countNotifs(){
	   	$id = $this->session->userdata('idnumber');
		$query = $this->db->query('SELECT count(notif_id) as count from notifs where to_whom = '.$id.' and idnumber != '.$id.' ');
		return $query->result();
	}


}
?>