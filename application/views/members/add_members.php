<h3>Add Members</h3>
<a href="<?php echo base_url('clerk/adults/index'); ?>" class="btn btn-primary">Back</a>
<div class ="form_content">
<form action="<?php echo base_url('clerk/adults/submit') ?>" method="post" class="form-horizontal">
	<div class ="form-group">
		<label for="idno" class="class-md-2 text-right" >ID Card Number</label>
		<div class="col-md-3">
			<input type="text" name="text_idno" class="form-control" placeholder="12345678" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" name="text_fname" class="form-control" placeholder="e.g benard" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="oname" class="class-md-2 text-right">Other Names</label>
		<div class="col-md-3">
			<input type="text" name="text_oname" class="form-control" placeholder="e.g kamau" required>
		</div>
	</div>
		<div class="form-group">
		<div class="gender"><label for="gender" class="class-md-2 text-right">Gender</label></div>
		<div class="col-md-3">
		<input type="radio" name="text_gender" value="Male" required="">Male
		<input type="radio" name="text_gender" value="Female" required="">Female
		</div>	
	</div>
	<div class ="form-group">
		<label for="occupation" class="class-md-2 text-right">occupation</label>
		<div class="col-md-3">
			<input type="text" name="text_occupation" class="form-control" placeholder="e.g Teacher" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="post" class="class-md-2 text-right">Membership by</label>
		<div class="col-md-3">
			<select class="class-md-2 text-right" id="post" name="text_post">
				<option>---select from the list below----</option>
			<option value="Member">Baptism</option>
			<option value="Clerk">Transfer</option>
			<option value="Treasurer">Proffession of Faith</option>
			
</select>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Phone Number</label>
		<div class="col-md-3">
			<input type="text" name="text_phone" class="form-control" placeholder="0712345678" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="email" class="class-md-2 text-right">Email Address</label>
		<div class="col-md-3">
			<input type="email" name="text_email" class="form-control" placeholder="e.g joe@gmail.com" required valid_email>
		</div>
	</div>
	<div class="form-group">
		<label for="post" class="class-md-2 text-right">Marital status</label>
		<div class="col-md-3">
		<select class="class-md-2 text-right" id="marital" name="text_marital">
				<option value="">---select from the list below----</option>
			<option value="Married">Married</option>
			<option value="Single">Single</option>
			<option value="Divorced">Divorced</option>
			<option value="Widow">Widow</option>
			<option value="Widower">Widower</option>	
		</select>	
	</div>
</div>
<<<<<<< HEAD
</div>
=======
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
		<div class ="form-group">
		<label for="address" class="class-md-2 text-right">Place of Residence</label>
		<div class="col-md-3">
			<textarea name="text_address" class="form-control" required rows="3" cols="10" placeholder="e.g 2nd Fl. House No.B12, North Road Nairobi"></textarea>
		</div>
	</div>
	<div class ="form-group">
		<label class="class-md-2 text-right"></label>
		<div class="col-md-3">
			<input type="submit" name="btnSave" class="btn btn-primary" value="Save">
		</div>
	</div>
	
</form>
</div>