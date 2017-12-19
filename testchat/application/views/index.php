<!DOCTYPE html>
<html>
<head>
	<title>Welcome to our Test</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"> 
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet'  type='text/css'>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="background">
              
			<h2>Welcome to our site.please press login for sign in or press registration for sign up</h2>
            
           
            
           <div class="buttongrp">
             <div class="registrationbut">
            
            
    
            
            <a href="<?php echo site_url('Registration/Load_Registration_Page');?>"> <button class="btn btn-success" id="butwidheig" type="submit">Registration</button></a>
            
             </div>
             <div class="login">
             <a href="#" class="btn btn-primary btn-lg" id="butwidheig" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
             </div>
            <div class="modal fade" id="login-modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    	<div class="modal-dialog">
			<div class="modal-content">
            

<div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" method="POST" action="<?php echo site_url('Chat'); ?>" >
		                <?php echo validation_errors(); ?>
                        <div class="modal-body">
				    		
				    		<input id="login_email" class="form-control" type="email" placeholder="Email" name="email" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Password" name="password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                              
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
           </div>  
<h4 id="error_message"> 

<?php echo $this->session->flashdata('error'); ?> 
</h4>
		</div>
        
	</div>

</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<script src="http://localhost/testchat/Js/login.js"</script> -->
 

</body>
</html>