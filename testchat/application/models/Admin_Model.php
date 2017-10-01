<?php 

class Admin_Model extends CI_Model 
{
	 public function Retrieve_Username_And_Password($Username,$password)
 {
   $this->db->select('Id, Username, Password, Role');
   $this->db->from('Administration');
   $this->db->where('Username',$Username);
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
