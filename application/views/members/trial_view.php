
	<?php require_once __DIR__.'/../layout/header.php';?>
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
	
	<a href="<?php echo base_url('modules/clerk/index'); ?>" class="glyphicon glyphicon-arrow-left">Back</a>
	<a href="<?php echo base_url('clerk/adults/add'); ?>" class="glyphicon glyphicon-plus">Add New</a>
	<!--<div class="search_button"><a href="<?php echo base_url('clerk/Search/index'); ?>" class="glyphicon glyphicon-search">Search Member</a></div>-->
	<table class="table table-striped table-hover table-responsive table-condensed" id="myTable">
		<thead>
			<tr>
				<th>ID Card Number</th>
				<th>First Name</th>
				<th>Other Names</th>
				<th>Gender</th>
				<th>Occupation</th>
				<th>Membership by</th>
				<th>Phone Number</th>
				<th>E-Mail Address</th>
				<th>Marital Status</th>
				<th>Place Of Residence</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if($members){
				foreach ($members as $member){

			?>
			
			
			<tr>
				<td><?php echo $member->ID_CARD_NUMBER; ?></td>
				<td><?php echo $member->FIRST_NAME; ?></td>
				<td><?php echo $member->OTHER_NAMES; ?></td>
				<td><?php echo $member->GENDER; ?></td>
				<td><?php echo $member->OCCUPATION; ?></td>
				<td><?php echo $member->CHURCH_LEADERSHIP_POST; ?></td>
				<td><?php echo $member->PHONE_NUMBER; ?></td>
				<td><?php echo $member->EMAIL_ADDRESS; ?></td>
				<td><?php echo $member->MARITAL_STATUS; ?></td>
				<td><?php echo $member->RESIDENTIAL_ADDRESS; ?></td>
				<td>
					<a href="<?php echo base_url('clerk/adults/edit/'.$member->ID); ?>" class="glyphicon glyphicon-edit"></a>
	
					<a href="<?php echo base_url('clerk/adults/delete/'.$member->ID) ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure you want to delete this record?');"></a>
				</td>
			</tr>
			<?php
		}
	}
	?>
		</tbody>
	</table>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>