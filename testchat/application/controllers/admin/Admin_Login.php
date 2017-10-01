<?php 
class Admin_Login extends Admin_Controller
{
 
  function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_Model');
  }
 
  public function index()
  {

    $this->load->view('admin/Admin_Login_view');
  }

  private function Check_Role()
  {


  }

  private function Login_Form_Validation()
		{
	            $this->load->helper('security');			

				$this->form_validation->set_rules('username','', 'trim|required|xss_clean');
				$this->form_validation->set_rules('password','', 'trim|required|xss_clean');

			if($this->form_validation->run() == false)
				{
					redirect();
				}	
			

		}

	private function Check_Username_And_Password()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			 
		    $result = $this->Admin_Model->Retrieve_Username_And_Password($username,$password);
            		    
		    if($result)
		    	{
		    	$Users_Session = array();
		    	foreach ($result as $row) {
		    		$Users_Session = array(
		    			'id' => $row->Id,
		    			'username' => $row->Username,
		    			'role' => $row->Role
		    			);
		    		$this->session->set_userdata('logged_in',$Users_Session);               	
		    	}
		    	
		    	return true;

		    }
		    else
		    {
		    	$this->form_validation->set_message('check_database Invalid Username or password');
		    	return false;
		    }


		}
	private function initializing_session()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['role'] = $session_data['role'];
			if($data['role'] =='Admin')
			{
				$this->load->view('admin/templates/header_and_sidebar');
				$this->load->view('admin/dashboard_view');
				$this->load->view('admin/templates/footer');		
			}		
			elseif(	$data['role'] =='operator')
		{
			
			$this->load->view('admin/operator_chat');
		}

		else
			{
				echo "actually Iam dont know who you are";
			}

		}
		
	}

  public function login()
  {
  	$this->Login_Form_Validation();
  	
  	if($this->check_Username_And_Password() == False)
  	{
  		$this->session->set_flashdata('error', 'invalid login or password');

  		$this->load->view('admin/Admin_Login');
  	}

  	else
  	{
  		
  		$this->initializing_session();
  		
  	}

   }


}
?>