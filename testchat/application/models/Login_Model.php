<?php
class Login_Model extends CI_Model
{
 
 public function Retrieve_User_From_DB($email,$password)
 {
   $this->db->select('Id, Email, Password, Firstname, Lastname');
   $this->db->from('Users');
   $this->db->where('Email',$email);
   $this->db->where('Password',$password);
   $this->db->limit(1);

   $User_Query = $this->db->get();



   if($User_Query->num_rows() == 1)
   {
   	return $User_Query->result();
   }
 }

}

?>