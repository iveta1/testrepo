<div class="col-xs-9">

<!-- <h1>Service id: <?php echo $service_data->id; ?></h1>  --><!-- id == id cislo to je 1 -->  
<!-- <h1>Service cesta: <?php echo $service_data->cesta; ?></h1> --> <!-- id == id cislo to je 1 -->
<!--
<p>sluzba: <?php echo $service_data->sluzba; ?></p>



<p>id_taxikara: <?php echo $service_data->id_taxikara; ?></p>
-->
 <!--
<p>id_zakaznika: <?php echo $service_data->id_zakaznika; ?></p>
<p>id_auta: <?php echo $service_data->id_auta; ?></p> 
<p>datum: <?php echo $service_data->datum; ?></p>
<p>cesta: <?php echo $service_data->cesta; ?></p>
<p>cena: <?php echo $service_data->cena; ?></p>
<p>sluzba: <?php echo $service_data->sluzba; ?></p> -->

 <!--<h3>id_taxikara</h3>
<p><?php echo $service_data->id_taxikara; ?></p> 

<h3>id_zakaznika</h3>
<?php echo $service_data->id_zakaznika; ?>  
 -->


<!--   <h3>id_taxikara:<?php echo $service_data->id_taxikara; ?></h3> 
<h3>id_zakaznika:<?php echo $service_data->id_zakaznika; ?></h3> 
<h3>id_auta:<?php echo $service_data->id_auta; ?></h3> -->
<h3>datum:<?php echo $service_data->datum; ?></h3> 
<h3>cena:<?php echo $service_data->cena; ?></h3> 
<h3>cesta:<?php echo $service_data->cesta; ?></h3> 
<h3>sluzba:<?php echo $service_data->sluzba; ?></h3> 


<!--
<h3>cesta </h3>

<p><?php echo $service_data->cesta; ?></p> -->

<h3>Taxidrivers</h3>  <!--status -->

<ul>

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

	<p>You  have not taxidriver pending</p>

	<?php endif;  ?>  <!--konec status -->



</ul>

</div>



<div class="col-xs-3 pull-right">
<ul class="list-group">
	
<h4>Service  </h4>



<li class="list-group-item"><a href="<?php echo base_url(); ?>taxidrivers/create/<?php echo $service_data->id; ?>">Create Taxidriver</a></li> 
<li class="list-group-item"><a href="<?php echo base_url();?>services/edit/<?php echo $service_data->id;?>">Edit Service</a></li>

<li class="list-group-item"><a href="<?php echo base_url();?>services/delete/<?php echo $service_data->id;?>">Delete Service</a></li>






<li class="list-group-item"><a href="">Create Customer</a></li>  
<li class="list-group-item"><a href="">Create Car</a></li>  





</ul>
</div>