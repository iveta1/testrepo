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

</p>

<a class="btn btn-primary pull-right"  href="<?php echo base_url();?>services/create">Create Service</a>



<table class="table table-hover">
<!--	<thead>  -->
		<tr>
		<th>
			 id
			</th>
			<th>
			 id_taxikara
			</th>
			<th>
			 id_zakaznika
			</th>
			<th>
			 id_auta
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
		</tr>
	</thead>
	<tbody>
		
		<?php foreach($services as $service): ?>

<tr>
			<?php echo "<td><a href='" .  base_url() . "services/display/". $service->id . "'>" . $service->id  .  "</a></td>"; ?>  <!-- localhost myAdmin: id_taxikara  -->
			<?php echo "<td>" . $service->id_taxikara  .  "</td>"; ?>
			<?php echo "<td>" . $service->id_zakaznika  .  "</td>"; ?>
			<?php echo "<td>" . $service->id_auta  .  "</td>"; ?>
			<?php echo "<td>" . $service->datum  .  "</td>"; ?>
			<?php echo "<td>" . $service->cesta  .  "</td>"; ?>
			<?php echo "<td>" . $service->cena  .  "</td>"; ?>
			<?php echo "<td>" . $service->sluzba  .  "</td>"; ?>
			
			<td><a class="btn btn-warning" href="<?php echo base_url(); ?>services/delete/<?php echo $service->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>  <!-- kriziky na vymazanie,  -->


<!-- .text-muted	
.text-success	
.text-info	
.text-warning	
.text-danger	  -->

			<!-- <td><a class="btn btn-danger" href="<?php echo base_url(); ?>services/delete/<?php echo $service->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td> --> <!-- kriziky na vymazanie, cervene-->

</tr>

		<?php endforeach; ?>

	</tbody>


</table>