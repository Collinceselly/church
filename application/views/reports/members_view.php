
	<h3>Members list</h3>

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
	<!--<a href="<?php echo base_url('clerk/adults_controller/add'); ?>" class="btn btn-primary">Add New</a>
	<a href="<?php echo base_url('modules/clerk_controller/index'); ?>" class="btn btn-primary">Back</a>-->
	<div class="search_button"><a href="<?php echo base_url('clerk/search_controller/index'); ?>" class="btn btn-primary">Search Member</a></div>
	<table class="table table-striped table-hover table-responsive table-condensed">
		<thead>
			<tr>
				<td>ID</td>
				<th>ID Card Number</th>
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Phone Number</th>
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
				<td><?php echo $member->PHONE_NUMBER; ?></td>
				<td>
					<a href="<?php echo base_url('reports/individual_member_sabbath_contribution_controller/selectDate'); ?>" class="btn btn-info">Records</a>
				</td>
			</tr>
			<?php
		}
	}
	?>
		</tbody>
	</table>