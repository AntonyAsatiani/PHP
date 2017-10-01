<?php 
class Operator_Model extends CI_Model
{
		function __construct() {
	parent::__construct();
}

public function Insert_Operator_Data_Into_DB()
{
	$firstname = $this->input->post('firstname');
	$lastname = $this->input->post('lastname');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$email = $this->input->post('email');
	$role = $this->input->post('role');

	$data  = array(
	 	'Firstname' => $firstname,
	 	'Lastname' => $lastname,
	 	'Role' => $role,
	 	'Password' => $password,
	 	'Username' => $username,
	 	'Email' => $email
	 	);
    
		 
	 $this->db->insert('Administration', $data);
	 redirect('Dashboard');
     

}

}
?>