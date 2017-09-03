<h1>Customer display</h1>


<table class="table table-bordered"> 
		<tr>
		<th>
			 first_name
			</th>
			<th>
			last_name
			</th>
			
			</tr>
	</thead>
	<tbody>
		
			<tr>
			<td>

			<div class="first-name">
				
				<?php echo $customer->first_name; ?>

			</div>
			
			<div class="customer-actions">
				
				<a href="<?php echo base_url(); ?>customers/edit/<?php echo $customer->id; ?>">Edit</a>

				<a href="<?php echo base_url(); ?>customers/delete/<?php echo $customer->service_id; ?>/<?php echo $customer->id; ?>">Delete</a>

			</div>
				
			</td>  


			<td><?php echo $customer->last_name; ?></td> 
			
			</tr>

			</tbody>

</table>


