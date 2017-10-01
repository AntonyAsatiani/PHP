<?php 
class Add_Operator extends CI_Controller
{
	public function Operator_page()
	{
		$this->load->view('admin/templates/header_and_sidebar');
		$this->load->view('admin/add_operator');
		$this->load->view('admin/templates/footer');
	}



	public function Add()
	{


		$this->load->model('Operator_Model');
		$this->Operator_Model->Insert_Operator_Data_Into_DB();
	}
}
?>