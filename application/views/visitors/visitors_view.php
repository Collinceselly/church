
	<h3>Visitors list</h3>

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
	<a href="<?php echo base_url('clerk/visitors/add'); ?>" class="btn btn-primary">Add New</a>
	<a href="<?php echo base_url('modules/clerk/index'); ?>" class="btn btn-primary">Back</a>
	<div class="search_button"><a href="<?php echo base_url('clerk/searchV/index'); ?>" class="btn btn-primary">Search Visitor</a></div>
	<table class="table table-striped table-hover table-responsive table-condensed">
		<thead>
			<tr>
				<td>ID</td>
				<th>ID Card Number</th>
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Occupation</th>
				<th>Phone Number</th>
				<th>E-Mail Address</th>
				<th>Usual Church</th>
				<th>date</th>
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
				<td><?php echo $member->ID_CARD_NUMBER; ?></td>
				<td><?php echo $member->FIRST_NAME; ?></td>
				<td><?php echo $member->OTHER_NAMES; ?></td>
				<td><?php echo $member->GENDER; ?></td>
				<td><?php echo $member->OCCUPATION; ?></td>
				<td><?php echo $member->PHONE_NUMBER; ?></td>
				<td><?php echo $member->EMAIL_ADDRESS; ?></td>
				<td><?php echo $member->CHURCH_ATTENDING; ?></td>
				<td><?php echo $member->ATTENDANCE_DATE; ?></td>
				<td>
					<a href="<?php echo base_url('clerk/visitors/edit/'.$member->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('clerk/visitors/delete/'.$member->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
				</td>
			</tr>
			<?php
		}
	}
	?>
		</tbody>
	</table>