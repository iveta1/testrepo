<h2>Create taxidriver</h2>


<?php $attributes = array('id'=>'cerate_form', 'class'=> 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('taxidrivers/create/' . $this->uri->segment(3) . '', $attributes);?>



<div class="form-group">
	
<?php echo form_label('first_name');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'first_name',
	'placeholder' => 'Enter first_name'
		
	);
?>

	<?php echo form_input($data);?>

</div>



<div class="form-group">
	
<?php echo form_label('last_name');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'last_name',
	'placeholder' => 'Enter last_name'
		
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
