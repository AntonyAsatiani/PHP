<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style_for_admin.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-left">
  
     <a  method="POST" class="navbar-brand" href="<?php echo site_url('admin/Dashboard/Load_Dashboard') ?>">Admin bar</a>
     
      <ul class="nav navbar-nav">
       <li ><a href="<?php echo site_url('admin/Add_Operator/Operator_page'); ?>">Add Operator</a></li>
      <li ><a href="<?php echo site_url('admin/Dashboard/logout') ?>">Logout</a></li>
   
      </ul>
     
</div>
