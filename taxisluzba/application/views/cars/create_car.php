<h2>Create car</h2>


<?php $attributes = array('id'=>'cerate_form', 'class'=> 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('cars/create/' . $this->uri->segment(3) . '', $attributes);?>


<div class="form-group">
	
<?php echo form_label('ec');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'ec',
	'placeholder' => 'ec'
	
		);
?>

	<?php echo form_input($data);?>

</div>



<div class="form-group">
	
<?php echo form_label('typ');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'typ',
	'placeholder' => 'Enter typ'
		
	);
?>

	<?php echo form_input($data);?>

</div>



<div class="form-group">
	
<?php  
$data = array(
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Create'
		
	);
?>

	<?php echo form_submit($data);?>

</div>


<?php echo form_close();?>
