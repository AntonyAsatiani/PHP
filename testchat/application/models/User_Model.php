<?php

class User_Model extends CI_Model
{
	function __construct() {
	parent::__construct();
}

	public function Inser_User_Into_DB()
	{
	     
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$phonenumber = $this->input->post('mobile');
		$personalnumber = $this->input->post('personalnumber');
		$password = $this->input->post('password');
     
	 $data  = array(
	 	'Firstname' => $firstname,
	 	'Lastname' => $lastname,
	 	'Email' => $email,
	 	'Password' => $password,
	 	'Personalnumber' => $personalnumber,
	 	'Mobilenumber' => $phonenumber
	 	);
    
		 
	 $this->db->insert('Users', $data);
     
	
        
}
}



?>