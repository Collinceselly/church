<<<<<<< HEAD
<!DOCTYPE html>
	
	<div class="R"><h3>Members Register</h3></div>
=======
<?php
require_once __DIR__.'/../layout/header.php';
echo '<div class="container">';?>
	<h3>Members list</h3>
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96

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
<<<<<<< HEAD
	<div class="h1"><h3>Treasurer <?php echo $this->session->userdata('FIRST_NAME')?></h3></div>
	<div class="logout"><a href="<?php echo base_url('TemplateController/index')?>">LOGOUT</a></div>
		<a href="<?php echo base_url('finance/givings/index'); ?>" class="btn btn-primary">Back</a>
	<!--<div class="search_button"><a href="<?php echo base_url('finance/givings/search'); ?>" class="glyphicon glyphicon-search">Search Member</a></div>-->
	<table class="table table-striped table-hover table-responsive table-condensed" id="myTable">
		<thead>
			<tr>
				<!--<td>ID</td>-->
=======
		<a href="<?php echo base_url('modules/clerk/index'); ?>" class="btn btn-primary">Back</a>
	<div class="search_button"><a href="<?php echo base_url('finance/givings/search'); ?>" class="btn btn-primary">Search Member</a></div>
	<table class="table table-striped table-hover table-responsive table-condensed" id="all_members_table">
		<thead>
			<tr>
				<td>ID</td>
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
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
<<<<<<< HEAD
				<!--<td><?php echo $member->ID; ?></td>-->
				<td><?php echo $member->ID_CARD_NUMBER; ?></td>
				<td><?php echo $member->FIRST_NAME; ?></td>
				<td><?php echo $member->OTHER_NAMES; ?></td>
				<td><?php echo $member->GENDER; ?></td>
				<td><?php echo $member->PHONE_NUMBER; ?></td>
				<td>
					<a href="<?php echo base_url('finance/givings/addGivings/'.$member->ID); ?>" class="glyphicon glyphicon-plus"></a>
=======
				<td><?php echo $member->ID; ?></td>
				<td><?php echo $member->ID_CARD_NUMBER; ?></td>
				<td><?php echo ucwords($member->FIRST_NAME); ?></td>
				<td><?php echo ucwords($member->OTHER_NAMES); ?></td>
				<td><?php echo ucwords($member->GENDER); ?></td>
				<td><?php echo $member->PHONE_NUMBER; ?></td>
				<td>
					<a href="<?php echo base_url('finance/givings/addGivings/'.$member->ID); ?>" class="btn btn-info">Add Givings record</a>
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
				</td>
			</tr>
			<?php
		}
	}
	?>
		</tbody>
	</table>
<<<<<<< HEAD
	<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
=======
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

>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
