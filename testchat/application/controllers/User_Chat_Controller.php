<?php
session_start();
class User_Chat_Controller extends CI_Controller
{

	
	    
	
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('index','refresh');
	}
}


?>