<h2>Edit Service22</h2>


<?php $attributes = array('id'=>'cerate_form', 'class'=> 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('services/edit/'. $service_data->id . '', $attributes);?>


<!--
<div class="form-group">
	
<?php echo form_label('id_taxikara');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'id_taxikara',
	'value' => $service_data->id_taxikara
		
	);
?>

	<?php echo form_input($data);?>

</div>



<div class="form-group">
	
<?php echo form_label('id_zakaznika');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'id_zakaznika',
	'value' => $service_data->id_zakaznika
		
	);
?>

	<?php echo form_input($data);?>

</div>




<div class="form-group">
	
<?php echo form_label('id_auta');  ?>

<?php  

$data = array(
	'class' => 'form-control',
	'name' => 'id_auta',
	'value' => $service_data->id_auta
		
	);
?>

	<?php echo form_input($data);?>

</div>

-->

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
