<?php

class User_Chat_Controller extends CI_Controller
{
 	public function __construct()
 	{
 		parent::construct();
 		$this->load->model('Message_model');
 	}

	public function Load_message()
	{
		return $this->Message_model->Get_latest_messages();

	}
	

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('index','refresh');
	}
	
}


?>