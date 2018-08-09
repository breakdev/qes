<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Quality Engineering Services</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url('assets3/css/style.css')?>">

  
</head>

<body>
  <div class="login-form">
    <form action="<?php echo base_url('Login')?>" method="POST">
    <center>
     <img style="width: 40%;" src="<?php echo base_url('assets1/images/logo.png')?>">
    </center>
    <br>
    <br>
     <div class="form-group ">
       <input type="text" class="form-control" name="user" placeholder="Username " id="UserName">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" name="pass" placeholder="Password" id="Passwod">
       <i class="fa fa-lock"></i>
     </div>
     <button type="submit" class="log-btn" >Log in</button>
     
    </form>
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!--<script  src="<?php echo base_url('assets3/js/index.js')?>"></script> -->

</body>
</html>
