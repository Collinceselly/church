<h3>Edit Visitors Records</h3>
<a href="<?php echo base_url('clerk/visitors_controller/index'); ?>" class="btn btn-default">Back</a>
<form action="<?php echo base_url('clerk/visitors_controller/update') ?>" method="post" class="form-horizontal">
	<input type="hidden" name="text_hidden" value="<?php echo $members->ID;?>" >
	<div class ="form-group">
		<label for="idno" class="class-md-2 text-right">ID Card Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->ID_CARD_NUMBER;?>" name="text_idno" class="form-control" required>
		</div>
	</div>
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
		<label for="occupation" class="class-md-2 text-right">occupation</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->OCCUPATION;?>" name="text_occupation" class="form-control" required>
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
		<label for="address" class="class-md-2 text-right">Usual Church</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->CHURCH_ATTENDING;?>" name="text_church" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="address" class="class-md-2 text-right">Date</label>
		<div class="col-md-3">
			<input type="date" value="<?php echo $members->ATTENDANCE_DATE;?>" name="text_date" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label class="class-md-2 text-right"></label>
		<div class="col-md-3">
			<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
		</div>
	</div>
</form>