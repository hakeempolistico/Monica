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
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		
		$result = $this->db->get('users');
		$result = $result->result_array();
		
		if (strcmp($result[0]['password'], $password != 0)){
			return FALSE;
		}
		return TRUE;
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
}

?>
