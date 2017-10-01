<?php
class Login_Controller extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Login_Model');
		}

	private function Login_Form_Validation()
		{
	            $this->load->helper('security');			

				$this->form_validation->set_rules('email','', 'trim|required|xss_clean');
				$this->form_validation->set_rules('password','', 'trim|required|xss_clean');

			if($this->form_validation->run() == false)
				{
					redirect();
				}	
			

		}

	private function check_User_Email_And_Password()
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			 
		    $result = $this->Login_Model->Take_User_Email_And_Password($email,$password);
            		    
		    if($result)
		    	{

		    		
		    	$Users_Session = array();
		    	foreach ($result as $row) {
		    		$Users_Session = array(
		    			'id' => $row->Id,
		    			'email' => $row->Email
		    			);
		    		$this->session->set_userdata('logged_in',$Users_Session);
		    	
		    	}
		    	return true;

		    
		    }

		   
		    else
		    {
		    	$this->form_validation->set_message('check_database Invalid email or password');
		    	return false;
		    }
		    


		}
	private function initializing_session()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['email'] = $session_data['email'];
			

			
		}
		else
		{
			redirect('index','refresh');
		}

	}

  public function login()
  {


  	$this->Login_Form_Validation();
  	
  	if($this->check_User_Email_And_Password() == False)
  	{
  		$this->session->set_flashdata('error', 'invalid login or password');

  		$this->load->view('index');

  	}
  	else
  	{
  		$this-> initializing_session();
  		$this->load->view('chat');	
  	}
  	//$this->check_User_Email_And_Password();
  	//
  	
  }

}




?>