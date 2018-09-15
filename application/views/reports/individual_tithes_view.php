<?php echo form_open('reports/individual_tithes_report_controller/viewTithes'); ?>
<div class="search1"><h3>Search by first name and sabbath date</h3>
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

<input type="date" name="date" placeholder="yyyy-mm-dd" required><br  />

<!--<input type="text" name="text_fname" placeholder="name" required><br>-->
<!--<input type="hidden" name="id1" <?php echo $searchUsers->GIVINGS_FR; ?>>-->
			<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br></div>
			<a href="<?php echo base_url('clerk/search_v_controller/index'); ?>" class="btn btn-primary">Back</a>

<table class="table table-striped table-hover table-responsive table-condensed">
	<thead>
	<tr>
		<!--<th><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></th>-->

				<th>Name</th>
				<th>Sabbath Date</th>
				<!--<th>Tithes contribution</th>-->
				<th>Action</th>
	</tr>
	</thead>

	<tbody>
		
		<?php

		if(isset($result)){
			foreach($result as $searchUsers){

				?>
			

				<tr>
					<td><?php echo $searchUsers->FIRST_NAME; ?></td>
					<td><?php echo $searchUsers->SABBATH_DATE; ?></td>
					<!--<td><?php echo $searchUsers->TITHES; ?></td>-->
					<!--<td>
						<a href="<?php echo base_url('clerk/visitors_controller/edit/'.$searchUsers->ID); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('clerk/visitors_controller/delete/'.$searchUsers->ID) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
					</td>-->
				</tr>
			
				<?php

			}
		}
?>
		 
	</tbody>
	

</table>