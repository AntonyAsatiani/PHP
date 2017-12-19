<?php
class Message_model extends CI_Model{

	public function Get_latest_messages()
	{
		return array_reverse($this->db->order_by('id', 'desc')->get('messages', 1000, 0)->result_array());
	}	

	public function Add_message()
	{
		$message = array(
		'author' => $this->session->logged_in['lastname'],
		'message' => $this->input->post('message'),
		'created_at' => date('H:i:s'),
		);
		return $this->db->insert('messages',$message);
	}

}
?>