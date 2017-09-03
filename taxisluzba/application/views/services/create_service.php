<h2>Create Service</h2>


<?php $attributes = array('id'=>'cerate_form', 'class'=> 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('services/create', $attributes);?>



<div class="form-group">
	
<?php echo form_label('datum');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'datum',
	'placeholder' => 'Enter datum'
		
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
	'placeholder' => 'Enter cesta'
		
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
	'placeholder' => 'Enter cena'
		
	);
?>

	<?php echo form_input($data);?>

</div>



<div class="form-group">
	
<?php echo form_label('sluzba');  ?>


<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'sluzba'
		
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
