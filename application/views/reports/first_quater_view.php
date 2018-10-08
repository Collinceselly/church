<?php echo form_open('reports/individual_tithes_report_controller/firstQuater'); ?>
<div class="search1"><h3>First Quater Tithes report</h3>
	<?php
	if($this->session->flashdata('success_msg')){

	 ?>

	 <div class="alert alert-success">
	 	<?php echo $this->session->flashdata('success_msg'); ?>
	 </div>
	 <?php
	}
	?>

	<?php
	if($this->session->flashdata('error_msg')){

	 ?>

	 <div class="alert alert-success">
	 	<?php echo $this->session->flashdata('error_msg'); ?>
	 </div>
	 <?php
	}
	?>
<label for="dateFrom">FROM 01-01-2018</label><br>	
<!--<input type="date" name="date_from" placeholder="yyyy-mm-dd" required><br>-->
<label for="dateFrom">TO 31-03-2018</label><br>
<!--<input type="date" name="date_to" placeholder="yyyy-mm-dd" required><br>-->
			<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br></div>
			<a href="<?php echo base_url('clerk/search_v_controller/index'); ?>" class="btn btn-primary">Back</a>

<table class="table table-striped table-hover table-responsive table-condensed">
	<thead>
	<tr>
		<!--<th><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></th>-->

				<th>Sabbath date</th>
				<th>Tithes</th>
				<th>Action</th>
	</tr>
	</thead>

	<tbody>
		
		<?php

		if(isset($result)){
			foreach($result as $results){

				?>
			

				<tr>
					<td><?php echo $results->SABBATH_DATE; ?></td>
					<td><?php echo $results->TITHES; ?></td>
					<td>
						<a href="<?php echo base_url('visitors_controller/edit/'.$searchUsers->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('visitors_controller/delete/'.$searchUsers->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
					</td>
				</tr>
			
				<?php

			}
		}
?>
		 
	</tbody>
	

</table>