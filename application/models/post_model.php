<?php

class Post_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

public function get_post(){
		$id = $this->session->userdata('idnumber');
	 	$this->db->where('idnumber', $id);
        $this->db->from('status');
        $this->db->order_by('stat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_post2(){
		$id = $this->session->userdata('idnumber');
	 	$this->db->where('idnumber', $id);
        $this->db->from('numberofstatus');
        $query = $this->db->get();
        return $query->result();
}
public function get_post3($userid){
	$this->db->where('idnumber', $userid);
        $this->db->from('status');
        $this->db->order_by('stat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_searchedprofile(){
        $id = $this->session->userdata('idnumber');
        $this->db->where('poster_id', $id);
        $this->db->from('exclusivestatus');
        $this->db->order_by('exstat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
                
}
public function get_allsearched(){
        $this->db->from('status');
        $this->db->join('exclusivestatus', 'status.idnumber=exclusivestatus.userprofile_id');
        $this->db->order_by('status.stat_id', 'DESC');
        $this->db->order_by('exclusivestatus.exstat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_post4($userid){
	 	$this->db->where('idnumber', $userid);
        $this->db->from('numberofstatus');
        $query = $this->db->get();
        return $query->result();
}
public function get_allpost(){
        $this->db->from('status');
        $this->db->order_by('stat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function post_status($data){
		$this->db->insert('status', $data);
		
}
public function post_searchedprofile($data){
                $this->db->insert('exclusivestatus', $data);
                
}

public function post_status2($data){
		$id = $this->session->userdata('idnumber');
		$this->db->select('stat_id','idnumber');
        $this->db->where('idnumber',$id);
        $noofstatus = $this->db->count_all_results('status');
        $this->db->delete('numberofstatus', array('idnumber' => $id));
		$data = array(
        'primarynum' => 'primarynum',
        'idnumber' => $id,
        'no_of_status' => $noofstatus
		);
		$this->db->insert('numberofstatus', $data);
}
public function post_comment($data){
        $statid = $this->input->post('status_id');
        $id = $this->session->userdata('idnumber');
	$this->db->insert('comments', $data);

        $this->db->select('*');
        $this->db->from('status');
        $this->db->where('stat_id', $statid);
        $query = $this->db->get();

        foreach ($query->result_array() as $row)
        {
        $data2 = array(
                'notif_id' => 'notif_id',
                'idnumber' => $id,
                'to_whom' => $row['idnumber'],
                'stat_id' => $statid,
                'notification' => 1,
                'datetime' => date("Y-m-d h:i:s")
                );
	}      
        $this->db->set($data2);
        $this->db->insert($this->db->dbprefix . 'notifs');
	
}
public function get_comment(){
        $this->db->from('comments');
        $this->db->join('users','comments.idnumber=users.idnumber');
        $query = $this->db->get();
        return $query->result();
}
public function get_comment2($userid){
        $this->db->from('comments');
        $this->db->join('users','comments.idnumber=users.idnumber');
        $query = $this->db->get();
        return $query->result();
}

public function grp_status($data){
		$this->db->insert('grpstatus', $data);
		
}
public function get_grpstatus($grp_id){
	 	$this->db->select("*");
		$this->db->from('grpstatus');
		$this->db->where('group_id', $grp_id);
		$this->db->order_by('grpstat_id', 'DESC');
		$query = $this->db->get();
		return $query->result();
}
public function get_li(){
	 	$this->db->select("*");
        $this->db->from('status');
        $this->db->order_by('idnumber', 'ASC');
        $query = $this->db->get();
        return $query->result();
}

}
	?>
