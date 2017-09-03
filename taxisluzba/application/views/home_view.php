<p clas="bg-success">
<?php if($this->session->flashdata('login_success')):  ?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php endif; ?>


</p>

<p clas="bg-danger">
<?php if($this->session->flashdata('login_failed')):  ?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('no_access')):  ?>
<?php echo $this->session->flashdata('no_access'); ?>
<?php endif; ?>
</p>

<div class="jumbotron">
 <h1> <center> Welcome</center></h1> 


</div>
<?php if(isset($services)): ?>

<h1>Service</h1>


<table class="table table-bordered"> 
		<tr>
		<th>
			 id
			</th>
			<th>
			 datum
			</th>
			<th>
			 cesta
			</th>
			<th>
			 cena
			</th>
				<th>
			 sluzba
			</th>
			<th>				
			</th>
			</tr>
	</thead>
	<tbody>
			

		<?php foreach($services as $service): ?>

			<tr>
			<td><?php echo $service->id; ?></td>  
			<td><?php echo $service->datum; ?></td> 
			<td><?php echo $service->cesta; ?></td> 
			<td><?php echo $service->cena; ?></td> 
			<td><?php echo $service->sluzba; ?></td> 

			<td><a href="<?php echo base_url();?>services/display/<?php echo $service->id ?>">View</a></td> 
			
			</tr>

		<?php endforeach; ?>

		</tbody>

</table>

<?php endif;?>





<?php if(isset($taxidrivers)): ?>

<h1> Taxidrivers</h1>


<table class="table table-bordered"> 

		<tr>
		<th>
			 id
			</th>
			<th>
			 first_name
			</th>
			<th>
			 last_name
			</th>
			<th>
				service_id
			</th>
			<th>				
			</th>
			</tr>
	</thead>
	<tbody>
		
	

		<?php foreach($taxidrivers as $taxidriver): ?>

			<tr>
			<td><?php echo $taxidriver->id; ?></td>  
			<td><?php echo $taxidriver->first_name; ?></td> 
			<td><?php echo $taxidriver->last_name; ?></td> 
		<td><?php echo $taxidriver->service_id; ?></td> 

			<td><a href="<?php echo base_url();?>taxidrivers/display/<?php echo $taxidriver->id ?>">View</a></td> 
			
	
			</tr>

		<?php endforeach; ?>

	</tbody>

</table>

<?php endif;?>





<?php if(isset($customers)): ?>

<h1> Customers</h1>

<table class="table table-bordered"> 

		<tr>
		<th>
			 id
			</th>
			<th>
			 first name
			</th>
			<th>
			 last name
			</th>
			<th>
				service_id
			</th>			
			<th>				
			</th>
			</tr>
	</thead>
	<tbody>
		

		<?php foreach($customers as $customer): ?>

			<tr>
			<td><?php echo $customer->id; ?></td>  
			<td><?php echo $customer->first_name; ?></td> 
			<td><?php echo $customer->last_name; ?></td> 
			<td><?php echo $customer->service_id; ?></td> 
		

			<td><a href="<?php echo base_url();?>customers/display/<?php echo $customer->id ?>">View</a></td> 
				
			</tr>

		<?php endforeach; ?>

		</tbody>

</table>

<?php endif;?>



<?php if(isset($cars)): ?>

<h1>Cars</h1>


<table class="table table-bordered"> 
		<tr>
		<th>
			 id
			</th>
			<th>
			 ec
			</th>
			<th>
			 typ
			</th>
				<th>
				service_id
			</th>
			<th>				
			</th>
			</tr>
	</thead>
	<tbody>
		
	
		<?php foreach($cars as $car): ?>

			<tr>
			<td><?php echo $car->id; ?></td>  
			<td><?php echo $car->ec; ?></td> 
			 <td><?php echo $car->typ; ?></td> 
			 <td><?php echo $car->service_id; ?></td> 

			<td><a href="<?php echo base_url();?>cars/display/<?php echo $car->id ?>">View</a></td> 
				
			</tr>
		<?php endforeach; ?>

	</tbody>

</table>

<?php endif;?>



