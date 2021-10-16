<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet"  href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<script src="<?php echo base_url();?>assets/js/jquery.js"></script>

	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<div class="col-xs-5">

<?php $this->load->view('users/login_view');?>

</div>


<div class="col-xs-15">
	<?php $this->load->view($main_view);?>
	

</div>

</div>




</body>
</html>  