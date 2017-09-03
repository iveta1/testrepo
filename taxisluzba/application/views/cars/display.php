<h1>Car display</h1>

<table class="table table-bordered"> 
		<tr>
		    <th>
			 ec
			</th>
			<th>
			typ
			</th>
			
			</tr>
	</thead>
	<tbody>
		<tr>
			<td>

			<div class="ec">
				
				<?php echo $car->ec; ?>

			</div>
			
			<div class="car-actions">
				
				<a href="<?php echo base_url(); ?>cars/edit/<?php echo $car->id; ?>">Edit</a>

             	<a href="<?php echo base_url(); ?>cars/delete/<?php echo $car->service_id; ?>/<?php echo $car->id; ?>">Delete</a>

			</div>
				
			</td>  

			<td><?php echo $car->typ; ?></td> 

			</tr>

			</tbody>
</table>