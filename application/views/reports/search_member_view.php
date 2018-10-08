<?php echo form_open('reports/individual_tithes_report_controller/searchMember'); ?>
<div class="search1"><h3>Search members by ID Card Number or First Name or Other Names</h3>
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

<input type="text" name="text_value" placeholder="Enter Id Number or First Name or Other names" required><br>


			<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br></div>
			<a href="<?php echo base_url('trial_controller/index'); ?>" class="btn btn-primary">Back</a>

<table class="table table-striped table-hover table-responsive table-condensed">
	<thead>
	<tr>
		<!--<th><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></th>-->

				<th>Id Number</th>
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
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
					<td><?php echo $searchUsers->ID_CARD_NUMBER; ?></td>
					<td><?php echo $searchUsers->FIRST_NAME; ?></td>
					<td><?php echo $searchUsers->OTHER_NAMES; ?></td>
					<td><?php echo $searchUsers->GENDER; ?></td>
					<td><?php echo $searchUsers->PHONE_NUMBER; ?></td>

					<td>
						<a href="<?php echo base_url('reports/individual_tithes_report_controller/selectType/'.$searchUsers->ID); ?>" class="btn btn-info">View Records</a>
				
					</td>
				</tr>
			
				<?php

			}
		}
?>
		 
	</tbody>
	

</table>