<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter User Registration Form Demo</title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo $this->session->flashdata('verify_msg'); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>User Registration Form</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "registrationform");
                echo form_open("auth/register", $attributes);?>
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input class="form-control" name="username" placeholder="Enter Username" type="text" value="<?php echo set_value('fname'); ?>" />
                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                </div>

                
                
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Password</label>
                    <input class="form-control" name="password" placeholder="Enter Password" type="password" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Confirm Password</label>
                    <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password" />
                    <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('gender'); ?></span>
                </div>
                    <div class ="form-group">
                     <label for ="phone" >Phone:</label>
                    <input class="form-control" name="phone" id="phone" placeholder="Enter Valid no." type="text">
                    <span class="text-danger"><?php echo form_error('phone'); ?></span>
                 </div>


                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Register</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>