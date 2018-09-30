<h3>Add Members</h3>
<a href="<?php echo base_url('clerk/adults/index'); ?>" class="btn btn-primary">Back</a>
<div class ="form_content">
<form action="<?php echo base_url('clerk/adults/submit') ?>" method="post" class="form-horizontal">
	<div class ="form-group">
		<label for="idno" class="class-md-2 text-right">ID Card Number</label>
		<div class="col-md-3">
			<input type="text" name="text_idno" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" name="text_fname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="oname" class="class-md-2 text-right">Other Names</label>
		<div class="col-md-3">
			<input type="text" name="text_oname" class="form-control" required>
		</div>
	</div>
	<!--<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" name="text_gender" class="form-control" required>
		</div>-->
		<div class="form-group">
		<div class="gender"><label for="gender" class="class-md-2 text-right">Gender</label></div>
			<input type="radio" name="text_gender" value="Male">Male
			<input type="radio" name="text_gender" value="Female">Female
	</div>
	<div class ="form-group">
		<label for="occupation" class="class-md-2 text-right">occupation</label>
		<div class="col-md-3">
			<input type="text" name="text_occupation" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="post" class="class-md-2 text-right">Church Leadership Post</label>
		<div class="col-md-3">
			<input type="text" name="text_post" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Phone Number</label>
		<div class="col-md-3">
			<input type="text" name="text_phone" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="email" class="class-md-2 text-right">Email Address</label>
		<div class="col-md-3">
			<input type="text" name="text_email" class="form-control" required valid_email>
		</div>
	</div>
		<div class ="form-group">
		<label for="address" class="class-md-2 text-right">Place of Residence</label>
		<div class="col-md-3">
			<input type="text" name="text_address" class="form-control" required>
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