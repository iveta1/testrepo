<div class="col-xs-9">


<h3>datum: <?php echo $service_data->datum; ?></h3>

<h3>cesta: <?php echo $service_data->cesta; ?></h3>
<h3>cena: <?php echo $service_data->cena; ?></h3>

<h3>sluzba: <?php echo $service_data->sluzba; ?></h3>


 
<h3>Taxidriver</h3>  

<ul> </ul>

<?php if($completed_taxidrivers):  ?>

	<?php foreach($completed_taxidrivers as $taxidriver):  ?>
<li>
		<a href="<?php echo base_url();?>taxidrivers/display/<?php echo $taxidriver->taxidrive_id; ?>" >  

		<?php echo $taxidriver->first_name; ?>
		<?php echo $taxidriver->last_name; ?>

		</a>

		</li>
	<?php endforeach; ?>

<?php else: ?>

	<p>You  have not taxidriver </p>

	<?php endif;  ?>  




<h3>Customer</h3>  

<ul>
	
</ul>

<?php if($completed_customers):  ?>

	<?php foreach($completed_customers as $customer):  ?>
<li>
		<a href="<?php echo base_url();?>customers/display/<?php echo $customer->customer_id; ?>" >

		<?php echo $customer->first_name; ?>
		<?php echo $customer->last_name; ?>

		</a>

		</li>
	<?php endforeach; ?>

<?php else: ?>

	<p>You  have not customer pending</p>

	<?php endif;  ?>  



<h3>Car</h3>  

<ul>
	
</ul>

<?php if($completed_cars):  ?>

	<?php foreach($completed_cars as $car):  ?>
<li>
		<a href="<?php echo base_url();?>cars/display/<?php echo $car->car_id; ?>" >

		<?php echo $car->ec; ?>
		<?php echo $car->typ; ?>

		</a>

		</li>
	<?php endforeach; ?>

<?php else: ?>

	<p>You  have not car pending</p>

	<?php endif;  ?>  


</ul>

</div>



<div class="col-xs-3 pull-right">
<ul class="list-group">
	
<h4>Service </h4>


<li class="list-group-item"><a href="<?php echo base_url(); ?>taxidrivers/create/<?php echo $service_data->id; ?>">Create Taxidriver</a></li> 


<li class="list-group-item"><a href="<?php echo base_url(); ?>customers/create/<?php echo $service_data->id; ?>">Create Customer</a></li> 

<li class="list-group-item"><a href="<?php echo base_url(); ?>cars/create/<?php echo $service_data->id; ?>">Create Car</a></li> 


<li class="list-group-item"><a href="<?php echo base_url();?>services/edit/<?php echo $service_data->id;?>">Edit Service</a></li>

<li class="list-group-item"><a href="<?php echo base_url();?>services/delete/<?php echo $service_data->id;?>">Delete Service</a></li>


</ul>
</div>