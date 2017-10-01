<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to the Dashboard</title>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet'  type='text/css'>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

 <div class="admin_button">
             <a href="#" class="btn btn-primary btn-lg" id="butwidheig" role="button" data-toggle="modal" data-target="#login-modal">admin</a>
             </div>
            <div class="modal fade" id="login-modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">

<h4 id="error_message"> 
<?php echo $this->session->flashdata('error');
   echo $this->session->userdata('user');
 ?> 
</h4>
 
<form id="login-form" method="POST" action="<?php echo site_url('admin/Admin_Login/login'); ?>" >
                        <?php echo validation_errors(); ?>
                        <div class="modal-body">
                            
                            <input id="login_email" class="form-control" type="text" placeholder="Username" name="username" required>
                            <input id="login_password" class="form-control" type="password" placeholder="Password" name="password" required>
                            
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            
                        </div>
                    
</form> 

</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url(); ?>Js/login.js"</script>

</body>
</html>
