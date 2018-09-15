<h3>Edit Baptismal Members Records</h3>
<a href="<?php echo base_url('children_controller/index'); ?>" class="btn btn-primary">Back</a>
<form action="<?php echo base_url('baptismal_records_controller/update') ?>" method="post" class="form-horizontal">
	<input type="hidden" name="text_hidden" value="<?php echo $members->ID;?>" >
	
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->FIRST_NAME;?>" name="text_fname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="oname" class="class-md-2 text-right">Other Names</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->OTHER_NAMES;?>" name="text_oname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->GENDER;?>" name="text_gender" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="age" class="class-md-2 text-right">Age</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->AGE;?>" name="text_age" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Phone Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->PHONE_NUMBER;?>" name="text_phone" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="email" class="class-md-2 text-right">Email Address</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->EMAIL_ADDRESS;?>" name="text_email" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="residence" class="class-md-2 text-right">Place of Residence</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->RESIDENCE;?>" name="text_residence" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label class="class-md-2 text-right"></label>
		<div class="col-md-3">
			<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
		</div>
	</div>
</form>