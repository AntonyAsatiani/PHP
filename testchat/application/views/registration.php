<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet'  type='text/css'>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">	

<link rel="stylesheet" type="text/css" href="http://localhost/testchat/css/style.css">

</head>


<body>
<div class="container">
	<div class="row">
    	<div class="col-md-3">
      	  <div class="registration">
        		<form action="<?php  echo site_url('Registration/User_Registration') ?>" method="POST" class="form-group" name="reg">
        			<label  for ="Firstname" class="control-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" >
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastname" >
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email" >
                    <label>Mobile Number</label>
                    <input type="number" class="form-control" name="mobile" >
                    <label>Personal Number</label>
                    <input type="number" class="form-control" name="personalnumber">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                    <label>Profile Photo</label>
                    <input type="file" name="photo" accept="image/*">
                    <button class="btn btn-success" type="submit" name="submit">Registration</button>
        		</form>
                
    	 </div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
<script src="http://localhost/testchat/Js/registration.js"></script>

</body>


</html>