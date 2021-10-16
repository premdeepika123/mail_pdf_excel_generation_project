<!DOCTYPE html>
<html>
<head>
    <title>CodeIgniter Image Upload</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="<?php echo base_url();?>assets/css/bootstrap.min.css "  rel="stylesheet">


</head>
<body>
    <div class ="col-lg-8  col-lg-offset-2">
        <h4><font color="blue"><center>Upload a file</center></font></h4>
        <?php
                if (isset($error)){
                    echo $error;
                }
            ?>
            <div class ="form-group">
            <form method="post" action="<?php base_url('upload/store')?>" enctype="multipart/form-data">
                <input type="file" id="profile_image" name="profile_image" size="33"  />
            </div>
            <!-- <div class= "text-center"> -->
                <input type="submit" name ="submit" value="Upload" class="btn btn-primary"/>
            <!-- </div> -->
            </form>
    </div>
</body>
</html>