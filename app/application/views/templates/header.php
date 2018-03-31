<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cynixIM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="instant chating application">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="CYNIX">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/particle/particle.css">
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <!-- css -->
 <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">-->
 <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">-->
  <?php foreach($styles as $style):?>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $style; ?>.css">
      <?php endforeach;?>
  <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chat.css">-->

  <!-- Insert this line above script imports  -->
  <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>

  
  <script  src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/socket/socket.io.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
  <!-- particlejs
  <script src="<?php echo base_url(); ?>assets/js/particle/particles.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/particle/app.js"></script> -->

  <!-- Insert this line after script imports -->
  <script>if (window.module) module = window.module;</script>

</head>
<body>
<div class="img">
<?php if($header === true): ?>

<div id="particles-js"></div>
<!-- navigation bar -->
<nav class="header1">
    <div class="nav-wrapper" style="border:none;"> 
      <a href="#!" class="brand-logo left"><i class="material-icons">message</i>cynIM</a>
      <ul id="nav-mobile"  class="right gap">
      <li class="medium"><a href="<?php echo base_url();?>index.php/user/login"><i class="left material-icons">person_pin</i>Login</a></li>
      <li class="medium"><a href="<?php echo base_url();?>index.php/user/register"><i class="left material-icons">person_add</i>Register</a></li>
      </ul>
    </div>
  </nav>
<?php endif; ?>

<input type="hidden" value="<?php echo SERVER_URL;?>" id='SERVER_URL'>
<input type="hidden" value='<?php echo base_url(); ?>' id='BASE_URL'>
