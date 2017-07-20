$(document).ready(function()
{
	$("#registration").click(function(){
      var name = $("#name").val();
      var email = $("#email").val();
      var password = $("#password").val();
      $("#name").animate();
      if(name == '' || email == '' || password == '')
      {
      	 
      }
      else if(password.length < 8)
      {
           alert("password should be 8 or more characters");
      }     
      else
      {
      	$.post("registration.php" ,
      	{
         name1: name,
         email1: email,
         password1: password
      	});
      }
	});
});