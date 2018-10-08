<?php
require_once __DIR__.'/../layout/header.php';
echo '<div class="container">';?>
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
		<a href="<?php echo base_url('modules/clerk/index'); ?>" class="btn btn-primary">Back</a>
	<div class="search_button"><a href="<?php echo base_url('finance/givings/search'); ?>" class="btn btn-primary">Search Member</a></div>
	<table class="table table-striped table-hover table-responsive table-condensed" id="all_members_table">
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
				<td><?php echo ucwords($member->FIRST_NAME); ?></td>
				<td><?php echo ucwords($member->OTHER_NAMES); ?></td>
				<td><?php echo ucwords($member->GENDER); ?></td>
				<td><?php echo $member->PHONE_NUMBER; ?></td>
				<td>
					<a href="<?php echo base_url('finance/givings/addGivings/'.$member->ID); ?>" class="btn btn-info">Add Givings record</a>
				</td>
			</tr>
			<?php
		}
	}
	?>
		</tbody>
	</table>
</div>
<script>
	$('#all_members_table').DataTable({
	dom: 'Bfrtip',
	buttons: [
	'copy', 'csv', 'excel', 'pdf', 'print'
	]
	});
</script>
</body>
</html>

