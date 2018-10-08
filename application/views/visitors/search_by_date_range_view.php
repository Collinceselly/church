<?php echo form_open('clerk/search_by_date_range_controller/search'); ?>
<div class="search1"><h3>Search Date Range</h3>
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
<label for="dateFrom">FROM</label>	
<input type="date" name="date_from" placeholder="yyyy-mm-dd" required><br>
<label for="dateFrom">TO</label>
<input type="date" name="date_to" placeholder="yyyy-mm-dd" required><br>
			<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br></div>
			<a href="<?php echo base_url('clerk/search_v_controller/index'); ?>" class="btn btn-primary">Back</a>

<table class="table table-striped table-hover table-responsive table-condensed">
	<thead>
	<tr>
		<!--<th><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></th>-->

				<th>ID Card Number</th>
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Occupation</th>
				<th>Phone Number</th>
				<th>E-Mail Address</th>
				<th>Usual Church</th>
				<th>Visiting Date</th>
				<th>Action</th>
	</tr>
	</thead>

	<tbody>
		
		<?php

		if(isset($result)){
			foreach($result as $searchUsers){

				?>
			

				<tr>
					<td><?php echo $searchUsers->ID_CARD_NUMBER; ?></td>
					<td><?php echo $searchUsers->FIRST_NAME; ?></td>
					<td><?php echo $searchUsers->OTHER_NAMES; ?></td>
					<td><?php echo $searchUsers->GENDER; ?></td>
					<td><?php echo $searchUsers->OCCUPATION; ?></td>
					<td><?php echo $searchUsers->PHONE_NUMBER; ?></td>
					<td><?php echo $searchUsers->EMAIL_ADDRESS; ?></td>
					<td><?php echo $searchUsers->CHURCH_ATTENDING; ?></td>
					<td><?php echo $searchUsers->ATTENDANCE_DATE; ?></td>
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