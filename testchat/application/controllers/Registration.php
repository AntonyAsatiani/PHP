<?php 
class Registration extends CI_Controller
{
  function __construct() {
	parent::__construct();
}
public function Load_Registration_Page()
	{		
		$this->load->view('registration');
	}



  public function User_Registration()
  {
  	 $this->load->helper('security');
     	
     $this->form_validation->set_rules('firstname', 'First name', 'required|trim|xss_clean');
   	 $this->form_validation->set_rules('lastname',  'Last name', 'trim|required|xss_clean');
     $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
     $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|xss_clean');
     $this->form_validation->set_rules('personalnumber', 'Personal Number', 'trim|required|xss_clean');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
  
 
	if($this->form_validation->run() == FALSE)
	{
		echo "error in validation";
	}
	else
	{
		$this->load->model('User_Model');
		$this->User_Model->Inser_User_Into_DB();
		redirect();
    
	}
}
}



?>