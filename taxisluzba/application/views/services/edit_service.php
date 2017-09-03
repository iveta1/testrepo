<h2>Edit Service</h2>


<?php $attributes = array('id'=>'cerate_form', 'class'=> 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('services/edit/'. $service_data->id . '', $attributes);?>


<div class="form-group">
	
<?php echo form_label('datum');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'datum',
	'value' => $service_data->datum
		
	);
?>

	<?php echo form_input($data);?>

</div>


<div class="form-group">
	
<?php echo form_label('cesta');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'cesta',
	'value' => $service_data->cesta
		
	);
?>

	<?php echo form_input($data);?>

</div>




<div class="form-group">
	
<?php echo form_label('cena');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'cena',
	'value' => $service_data->cena
		
	);
?>

	<?php echo form_input($data);?>

</div>


<div class="form-group">
	
<?php echo form_label('sluzba');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'sluzba',
	'value' => $service_data->sluzba
		
	);
?>

	<?php echo form_input($data);?>

</div>






<div class="form-group">
	
<?php  
$data = array(
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Update'
		

	);
?>

	<?php echo form_submit($data);?>

</div>


<?php echo form_close();?>
