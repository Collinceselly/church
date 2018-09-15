
	<h3>Baptised Members list</h3>

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
	<a href="<?php echo base_url('baptismal_records_controller/index'); ?>" class="btn btn-primary">Back</a>
	<!--<a href="<?php echo base_url('baptismal_records_controller/add'); ?>" class="btn btn-primary">Add</a>-->
	
	<!--<div class="search_button"><a href="<?php echo base_url('search_c_controller/index'); ?>" class="btn btn-primary">Search a child</a></div>-->
	<table class="table table-striped table-hover table-responsive table-condensed">
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Phone Number</th>
				<th>Email Address</th>
				<th>Place of Residence</th>
				<th>Baptism Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if($members){
				foreach ($members as $member){

			?>
			
			
			<tr>
				<td><?php echo $member->ID; ?></td>
				<td><?php echo $member->FIRST_NAME; ?></td>
				<td><?php echo $member->OTHER_NAMES; ?></td>
				<td><?php echo $member->GENDER; ?></td>
				<td><?php echo $member->AGE; ?></td>
				<td><?php echo $member->PHONE_NUMBER; ?></td>
				<td><?php echo $member->EMAIL_ADDRESS; ?></td>
				<td><?php echo $member->RESIDENCE; ?></td>
				<td><?php echo $member->BAPTISM_DATE; ?></td>
				<td>
					<a href="<?php echo base_url('baptismal_records_controller/edit/'.$member->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('baptismal_records_controller/approve/'.$member->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
				</td>
			</tr>
			<?php
		}
	}
	?>
		</tbody>
	</table>