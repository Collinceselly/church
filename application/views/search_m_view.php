<?php echo form_open('clerk/search_m_controller/search'); ?>
<div class="search1"><h3>Search members by ID Card Number or First Name</h3>
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

<input type="text" name="text_value" placeholder="Enter First Name or Other names" required><br>


			<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br></div>
			<a href="<?php echo base_url('trial_controller/index'); ?>" class="btn btn-primary">Back</a>

<table class="table table-striped table-hover table-responsive table-condensed">
	<thead>
	<tr>
		<!--<th><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></th>-->

				
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Baptized</th>
				<th>Fathers First Name</th>
				<th>Fathers Other Names</th>
				<th>Mother First Name</th>
				<th>Mother Other Names</th>
				<th>Father ID Number</th>
				<th>Mother ID Number</th>
				<th>Action</th>
	</tr>
	</thead>

	<tbody>
		
		<?php

		if(isset($result)){
			foreach($result as $searchUsers){

				?>
			

				<tr>
					<td><?php echo $searchUsers->C_FIRST_NAME; ?></td>
					<td><?php echo $searchUsers->C_OTHER_NAMES; ?></td>
					<td><?php echo $searchUsers->GENDER; ?></td>
					<td><?php echo $searchUsers->BAPTIZED; ?></td>
					<td><?php echo $searchUsers->FATHER_FNAME; ?></td>
					<td><?php echo $searchUsers->FATHER_LNAME; ?></td>
					<td><?php echo $searchUsers->MOTHER_FNAME; ?></td>
					<td><?php echo $searchUsers->MOTHER_LNAME; ?></td>
					<td><?php echo $searchUsers->FATHER_IDNO; ?></td>
					<td><?php echo $searchUsers->MOTHER_IDNO; ?></td>
					<td>
						<a href="<?php echo base_url('trial_controller/edit/'.$searchUsers->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('trial_controller/delete/'.$searchUsers->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
					</td>
				</tr>
			
				<?php

			}
		}
?>
		 
	</tbody>
	

</table>