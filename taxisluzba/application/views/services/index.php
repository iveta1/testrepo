<h1>Services</h1>
<p class="bg-success">


<?php if($this->session->flashdata('service_created')):  ?>
<?php echo $this->session->flashdata('service_created'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('service_updated')):  ?>
<?php echo $this->session->flashdata('service_updated'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('service_deleted')):  ?>
<?php echo $this->session->flashdata('service_deleted'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('taxidriver_updated')):  ?>
<?php echo $this->session->flashdata('taxidriver_updated'); ?>
<?php endif; ?>




<?php if($this->session->flashdata('customer_updated')):  ?>
<?php echo $this->session->flashdata('customer_updated'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('car_updated')):  ?>
<?php echo $this->session->flashdata('car_updated'); ?>
<?php endif; ?>


</p>

<a class="btn btn-primary pull-right"  href="<?php echo base_url();?>services/create">Create Service</a>



<table class="table table-hover">
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
			<?php echo "<td><a href='" .  base_url() . "services/display/". $service->id . "'>" . $service->id  .  "</a></td>"; ?>  
		
			<?php echo "<td>" . $service->datum  .  "</td>"; ?>
			<?php echo "<td>" . $service->cesta  .  "</td>"; ?>
			<?php echo "<td>" . $service->cena  .  "</td>"; ?>
			<?php echo "<td>" . $service->sluzba  .  "</td>"; ?>

			<td><a class="btn btn-warning" href="<?php echo base_url(); ?>services/delete/<?php echo $service->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>  
		
</tr>
		<?php endforeach; ?>

	</tbody>
</table>