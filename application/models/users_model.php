<?php

class Users_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
$condition = "username =" . "'" . $data['username'] . "'";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('users', $data);
if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

// Read data using username and password
public function login($username, $password) {
		$this->db->where('username',$username);
        $result = $this->db->get('users');
        
        $result = $result->result_array();
        

        
        if(strcmp($result[0]['password'], $password) != 0) {
            return FALSE;
                        
        }
        
        else {   
        
        return $result;
        
        }   
	}

// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "username =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

    public function check_user_exists($username){
        $this->db->where('username',$username);
        $this->db->from('users');
        $query = $this->db->get();
        if($query->num_rows() >0){
            return $query->result();
        }else{
            return $query->result();
 //           return false;
        }

    }
  public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'username' => $row->username,
                     'password' => $row->password,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

    public function userexist(){
        
        mysql_select_db("etona");

        if(isset($_POST['username']))
        {
    $username = mysql_real_escape_string($_POST['username']);

    if(!empty($username))
    {
        $query = mysql_query("SELECT * FROM users where username='$username'");
        $username_result = mysql_num_rows($query);

        if($username_result==0)
        {
            echo "Username Available";
        }
        else if($username_result==1)
        {
            echo "Sorry, That username is already taken";
        }
    }
}
    }
    public function UserInfo(){
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }
    public function getUserInfo(){
        $id = $this->session->userdata('idnumber');
        $this->db->where('idnumber', $id);
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }
    public function getUserInfo2($userid){
        $this->db->where('idnumber', $userid);
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    public function members(){
        $id = $this->session->userdata('idnumber');
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where('idnumber !=', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function users(){
        $id = $this->session->userdata('idnumber');
        $this->db->select("*");
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }
    public function profilepic($data) {
        $id = $this->session->userdata('idnumber');
        $this->db->delete('profilepic', array('idnumber' => $id));
        $this->db->insert('profilepic', $data);
    }
    public function coverpic($data) {
        $this->db->insert('coverphotos', $data);
    }

    public function search($search){
     $this->db->select('*');
     $this->db->from('users');
     $this->db->like('username',$search);
     $this->db->or_like('fname',$search);
     $this->db->or_like('lname',$search);
     $this->db->or_like('mname',$search);
     $query = $this->db->get();
     foreach ($query->result_array() as $row)
            {
                $memb = $row['idnumber'];
                }
    $error = 'There is no record for the one you searched. Please go Back.';
    $query1 = $this->db->query("SELECT * FROM users WHERE idnumber ='$memb'");
    $hehe = $query1->result_array();
    if($hehe==NULL){
            echo $error; exit;  
        } else {
     return $memb;
    }
}
    public function searchgrp($search){
     $this->db->select('*');
     $this->db->from('groups');
     $this->db->like('group_name',$search);
     $this->db->or_like('group_creator',$search);
     $query = $this->db->get();
     return $query->result();
    }
}

?>
