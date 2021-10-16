<html>
<head>
<title>My Form</title>
</head>
<body><br/><br/><br/>
<!-- <h4><font color='blue'> Login Form</font></h4> -->
	

<?php $attributes = array('id' => 'login_form', 'class' =>'form_horizontal');?>

<!-- <?php  if($this->session->flashdata('errors')):  ?> 
 
<?php  echo $this->session->flashdata('errors');  ?>

<?php  endif;  ?>  --> 


 <?php echo validation_errors('<div class="alert alert-danger>','</div>'); ?>  

<?php echo form_open('users/login',$attributes); ?>

<div  class ="form-group">
	<?php echo form_label('First Name')?>
	<?php
	$data = array(

			'class' => 'form-control',
			'name' => 'firstname',
			'placeholder' =>'Enter Firstname'

	);

	?>
	<?php echo form_input($data);?>

</div>


<div  class ="form-group">
	<?php echo form_label('Last Name')?>
	<?php
	$data = array(

			'class' => 'form-control',
			'name' => 'lastname',
			'placeholder' =>'Enter Lastname'

	);

	?>
	<?php echo form_input($data);?>

</div>

  <div  class ="form-group">
	<?php echo form_label('Email')?>
	<?php
	$data = array(

			'class' => 'form-control',
			'name' => 'email',
			'placeholder' =>'Enter valid Email'

	);

	?>
	<?php echo form_input($data);?>

</div> 

 <div  class ="form-group">
	<?php echo form_label('Age')?>
	<?php
	$data = array(

			'class' => 'form-control',
			'name' => 'age',
			'placeholder' =>'Enter your age'

	);

	?>
	<?php echo form_input($data);?>

</div> 
<div  class ="form-group">
	<?php echo form_label('Location')?>
	<?php
	$data = array(

			'class' => 'form-control',
			'name' => 'location',
			'placeholder' =>'Enter your location'

	);

	?>
	<?php echo form_input($data);?>

</div> 


<div  class ="form-group">
	
	<?php
	$data = array(

			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' =>'Login'

	);
    
	?>
	<?php echo form_submit($data);?>

</div>






<?php echo form_close(); ?>
</body>
</html>
