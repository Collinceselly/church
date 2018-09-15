<?php echo form_open('reports/individual_member_sabbath_contribution_controller/viewContribution'); ?>
<div class="search1"><h3>Search date</h3>
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

<input type="date" name="date" placeholder="yyyy-mm-dd" required><br>
<!--<input type="hidden" name="id1" <?php echo $searchUsers->GIVINGS_FR; ?>>-->
			<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br></div>
			<a href="<?php echo base_url('clerk/search_v_controller/index'); ?>" class="btn btn-primary">Back</a>

<table class="table table-striped table-hover table-responsive table-condensed">
	<thead>
	<tr>
		<!--<th><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></th>-->

				<th>Sabbath Date</th>
				<th>Tithes</th>
				<th>Combined Offrings</th>
				<th>Camp Meeting Offerings</th>
				<th>Church Building</th>
				<th>Conference offerings</th>
				<th>Local Church Development</th>
				<th>Station Development offerings</th>
				<th>Total</th>
				<th>Action</th>
	</tr>
	</thead>

	<tbody>
		
		<?php

		if(isset($result)){
			foreach($result as $searchUsers){

				?>
			

				<tr>
					<td><?php echo $searchUsers->SABBATH_DATE; ?></td>
					<td><?php echo $searchUsers->TITHES; ?></td>
					<td><?php echo $searchUsers->COMBINED_OFFERING; ?></td>
					<td><?php echo $searchUsers->CAMP_OFFERING; ?></td>
					<td><?php echo $searchUsers->CHURCH_BUILDING; ?></td>
					<td><?php echo $searchUsers->CONFERENCE; ?></td>
					<td><?php echo $searchUsers->LOCAL_CHURCH; ?></td>
					<td><?php echo $searchUsers->STATION_DEVELOPMENT; ?></td>
					<td><?php echo $searchUsers->TOTAL_AMOUNT; ?></td>
					<td>
						<a href="<?php echo base_url('clerk/visitors_controller/edit/'.$searchUsers->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('clerk/visitors_controller/delete/'.$searchUsers->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
					</td>
				</tr>
			
				<?php

			}
		}
?>
		 
	</tbody>
	

</table>