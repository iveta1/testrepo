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

<h1> Taxi service</h1>


<table class="table table-bordered"> 
		<tr>
		<th>
			 id
			</th>
			<th>
			 id_taxikara 5
			</th>
			<th>
			 id_zakaznika
			</th>
			<th>
			 id_auta
			</th>
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
			<td><?php echo $service->id_taxikara; ?></td> 
			<td><?php echo $service->id_zakaznika; ?></td> 
			<td><?php echo $service->id_auta; ?></td> 

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