<!DOCTYPE html>
<html>
<head>
   <title>userchat</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">


</head>
<body>


<div class="main_section">
   <div class="container">
      <div class="chat_container">
         <div class="col-md-12 message_section">
            <div class="row">
              <div class="new_message_head">
                <div class="user_name"> <?php echo $this->session->logged_in['firstname'] . ' ' .  $this->session->logged_in['lastname']; ?></div>

                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cogs" aria-hidden="true"></i>Setting
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="<?php echo base_url(); ?>">Logout</a></li>
                </ul>
              </div>
            </div>
          </div><!--new_message_head-->
       
          <div class="chat_area">
              <div class="chat-body1 clearfix" id="block">
                <ul class="list-unstyled">
                  <!--
                  <li class="left clearfix">
                                         <span class="chat-img1 pull-left">
                     <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                      
                 
                                      
                  </li>
                -->
                </ul>
               </div>

       </div><!--chat_area-->
          <div class="message_write">       
      <?php echo form_open('User_Chat_Controller/'); ?>
      <label type="hidden" for="Message"></label>
       <input type="input" class="form-control" placeholder="type a message" name="message" id="send_message">
       <div class="chat_bottom">
          <a href="#" class="pull-left upload_btn"><i class="fa fa-file" aria-hidden="true"></i> Upload file</a>
          <!--<button class="btn btn-success" id="voice" disabled="true"><i class="fa fa-microphone" aria-hidden="true"></i> send voice</button> -->
          <button class="pull-right btn btn-success" id="send_btn">Send</button>

        
      <?php echo form_close();?>
      </div>
    </form>
 </div>
       </div>
         </div> <!--message_section-->
      </div>
   </div>
</div>
</script>
<script src="https://use.fontawesome.com/45e03a14ce.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://localhost:3000/socket.io/socket.io.js"></script>
<script src="http://localhost/testchat/Js/chat-client.js"></script>




</body>
</html>