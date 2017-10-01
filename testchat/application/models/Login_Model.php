<?php
class Login_Model extends CI_Model
{
 
 public function Take_User_Email_And_Password($email,$password)
 {
   $this->db->select('Id, Email, Password');
   $this->db->from('Users');
   $this->db->where('Email',$email);
   $this->db->where('Password',$password);
   $this->db->limit(1);

   $User_Query = $this->db->get();


  // var_dump($User_Query);

   if($User_Query->num_rows() == 1)
   {
   	return $User_Query->result();
   }
   else
   {
   	echo "Hey nigga email or password is incorrect man";
    
   }


 }

}

?>