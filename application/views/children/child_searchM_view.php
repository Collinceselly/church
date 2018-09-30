<?php echo form_open('childrenSearchM/search'); ?>
<div class="search1"><h3>Search by Mother's ID Card Number</h3>
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

<input type="text" name="idno" placeholder="Enter Mother's ID Number" required><br>
			<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br></div>
			<a href="<?php echo base_url('search_c_controller/index'); ?>" class="btn btn-primary">Back</a>

<table class="table table-striped table-hover table-responsive table-condensed">
	<thead>
	<tr>
		<!--<th><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></th>-->

				
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Baptized</th>
				<th>Father's First Name</th>
				<th>Father's Last Name</th>
				<th>Mother's First Name</th>
				<th>Mother's Last Name</th>
				<th>Father's ID No</th>
				<th>Mother's ID No</th>
				<th>Phone Number</th>
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
					<td><?php echo $searchUsers->FATHER_IDNO; ?></td>
					<td><?php echo $searchUsers->ID_CARD_NUMBER; ?></td>
					<td><?php echo $searchUsers->FIRST_NAME; ?></td>
					<td><?php echo $searchUsers->OTHER_NAMES; ?></td>
					<td><?php echo $searchUsers->PHONE_NUMBER; ?></td>
					<!--<td><?php echo $searchUsers->C_FIRST_NAME; ?></td>
					<td><?php echo $searchUsers->C_OTHER_NAMES; ?></td>
					<td><?php echo $searchUsers->GENDER; ?></td>
					<td><?php echo $searchUsers->BAPTIZED; ?></td>
					<td><?php echo $searchUsers->FATHER_FNAME; ?></td>
					<td><?php echo $searchUsers->FATHER_LNAME; ?></td>
					<td><?php echo $searchUsers->MOTHER_FNAME; ?></td>
					<td><?php echo $searchUsers->MOTHER_LNAME; ?></td>
					<td><?php echo $searchUsers->FATHER_IDNO; ?></td>
					<td><?php echo $searchUsers->MOTHER_IDNO; ?></td>
					<td><?php echo $searchUsers->PHONE_NUMBER; ?></td>-->
					<td>
						<a href="<?php echo base_url('children/edit/'.$searchUsers->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('children/delete/'.$searchUsers->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
					</td>
				</tr>
			
				<?php

			}
		}
?>
		 
	</tbody>
	

</table>