<h1>Taxidriver </h1>


<table class="table table-bordered"> 
		<tr>
		<th>
			 first name
			</th>
			<th>
			last name
			</th>
				</tr>
	</thead>
	<tbody>

			<tr>
			<td>

			<div class="first-name">
				
				<?php echo $taxidriver->first_name; ?>

			</div>
			
			<div class="taxidriver-actions">
				
				<a href="<?php echo base_url(); ?>taxidrivers/edit/<?php echo $taxidriver->id; ?>">Edit</a>

				<a href="<?php echo base_url(); ?>taxidrivers/delete/<?php echo $taxidriver->service_id; ?>/<?php echo $taxidriver->id; ?>">Delete</a>

			</div>
				
			</td>  

			<td><?php echo $taxidriver->last_name; ?></td> 		

			</tr>

			</tbody>
</table>