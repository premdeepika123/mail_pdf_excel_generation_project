<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css "  rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


  <!--   <div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo $this->session->flashdata('verify_msg'); ?>
    </div>
</div> -->
        <div class ="col-lg-8  col-lg-offset-2">
    <h3><center><font color="blue">Register Page!!!</font></center></h3><br>
    <p><b><font color="red">Fill in the details to register on our website!!</font></b></p>
    <?php if(isset($_SESSION['success']))  { ?>
      <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>

    <?php
     }
    ?>
    
    <?php echo validation_errors('<div class ="alert alert-danger">','</div>')?>

      <form action="" method="POST" enctype="mutlipart/form-data">
      <div class ="form-group">
        <label for ="username" >Username:</label>
        <input class="form-control" name="username" id="username" type="text">
    </div>
          <div class ="form-group">
        <label for ="email" >Email:</label>
        <input class="form-control" name="email" id="email" type="text">
    </div>
          <div class ="form-group">
        <label for ="password" >Password:</label>
        <input class="form-control" name="password" id="password" type="password">
    </div>
    <div class ="form-group">
        <label for ="confirm_password" >Confirm Password:</label>
        <input class="form-control" name="confirm_password" id="password2" type="password">
    </div>
          <div class ="form-group">
        <label for ="gender" >Gender:</label>
        <select class="form-control" name="gender" id="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
    </div>
          <div class ="form-group">
        <label for ="phone" >Phone:</label>
        <input class="form-control" name="phone" id="phone" type="text">
    </div>
 

          <div>
            <input type="file" name="userfile">
            <!-- <input type="submit" value="Upload"> -->
          </div>

    <div class="text-center">
      <button class="btn btn-primary" name="register">Register</button>
    </div>
  </form>
  
</div>

<div>
  <h4><a href="<?php echo base_url(); ?>index.php/auth/login">Log In</a></h4><br>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>