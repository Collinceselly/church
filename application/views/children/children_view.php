
	<h3>Children list</h3>

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
	<a href="<?php echo base_url('clerk/children_controller/add'); ?>" class="btn btn-primary">Add New</a>
	<a href="<?php echo base_url('modules/clerk_controller/index'); ?>" class="btn btn-primary">Back</a>
	<div class="search_button"><a href="<?php echo base_url('clerk/search_c_controller/index'); ?>" class="btn btn-primary">Search a child</a></div>
	<table class="table table-striped table-hover table-responsive table-condensed">
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Baptized</th>
				<th>Father's First Name</th>
				<th>Father's Last Name</th>
				<th>Mother's First Name</th>
				<th>Mother's Last Name</th>
				<th>Father's ID Number</th>
				<th>Mother's ID Number</th>
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
				<td><?php echo $member->C_FIRST_NAME; ?></td>
				<td><?php echo $member->C_OTHER_NAMES; ?></td>
				<td><?php echo $member->GENDER; ?></td>
				<td><?php echo $member->BAPTIZED; ?></td>
				<td><?php echo $member->FATHER_FNAME; ?></td>
				<td><?php echo $member->FATHER_LNAME; ?></td>
				<td><?php echo $member->MOTHER_FNAME; ?></td>
				<td><?php echo $member->MOTHER_LNAME; ?></td>
				<td><?php echo $member->FATHER_IDNO; ?></td>
				<td><?php echo $member->MOTHER_IDNO; ?></td>
				<td>
					<a href="<?php echo base_url('clerk/children_controller/edit/'.$member->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('clerk/children_controller/delete/'.$member->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
				</td>
			</tr>
			<?php
		}
	}
	?>
		</tbody>
	</table>