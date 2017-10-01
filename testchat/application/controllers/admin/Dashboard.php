<?php 
class Dashboard extends CI_Controller
{

	function __construct(){
    parent::__construct();      

     
    	if( !$this->session->userdata('logged_in')){
          redirect();
     }

               
}

	public function Load_Dashboard()
	{
		$this->load->view('admin/templates/header_and_sidebar');
		$this->load->view('admin/dashboard_view');
		$this->load->view('admin/templates/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect();
	}
}

?>