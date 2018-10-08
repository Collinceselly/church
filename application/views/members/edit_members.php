<h3>Edit Members Records</h3>
<a href="<?php echo base_url('clerk/Adults/index'); ?>" class="btn btn-default">Back</a>
<form action="<?php echo base_url('/clerk/Adults/update') ?>" method="post" class="form-horizontal">
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
	<!--<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->GENDER;?>" name="text_gender" class="form-control" required>
		</div>
	</div>-->
	<div class="form-group">
		<div class="gender"><label for="gender" class="class-md-2 text-right">Gender</label></div>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->GENDER;?>" name="text_gender" class="form-control" required>
			<input type="radio" name="text_gender" value="Male">Male
			<input type="radio" name="text_gender" value="Female">Female
	</div>
</div>
	<div class ="form-group">
		<label for="occupation" class="class-md-2 text-right">occupation</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->OCCUPATION;?>" name="text_occupation" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="post" class="class-md-2 text-right">Church Responsibility</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->CHURCH_LEADERSHIP_POST;?>" name="text_post" class="form-control" required>
			<select class="class-md-2 text-right" id="post" name="text_post">
			<option>---select from the list below----</option>
			<option value="Member">Baptism</option>
			<option value="Clerk">Transfer</option>
			<option value="Treasurer">Profession of Faith</option>
		</select>
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
		<label for="marital" class="class-md-2 text-right">Marital Status</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->MARITAL_STATUS;?>" name="text_marital" class="form-control" required>
			<select class="class-md-2 text-right" id="marital" name="text_marrital">
				<option>---select from the list below----</option>
			<option value="Married">Married</option>
			<option value="Single">Single</option>
			<option value="Divorced">Divorced</option>
			<option value="Widow">Widow</option>
			<option value="Widower">Widower</option>
			
			
		</select>
		</div>
	</div>
		<div class ="form-group">
		<label for="address" class="class-md-2 text-right">Place of Residence</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->RESIDENTIAL_ADDRESS;?>" name="text_address" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label class="class-md-2 text-right"></label>
		<div class="col-md-3">
			<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
		</div>
	</div>
</form>