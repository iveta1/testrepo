<h2>Edit taxidriver</h2>


<?php $attributes = array('id'=>'edit_taxidriver_form', 'class'=> 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('taxidrivers/edit/' . $this->uri->segment(3) . '', $attributes);?>



<div class="form-group">
	
<?php echo form_label('first_name');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'first_name',
	'value' => $the_taxidriver->first_name
		
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
	'value' => $the_taxidriver->last_name
		
	);
?>

	<?php echo form_input($data);?>

</div>





<div class="form-group">
	
<?php echo form_label('datum');  ?> 

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'due_date',
	'type' =>'date',
	'value' => $the_taxidriver->due_date
		
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
