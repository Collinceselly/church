<h3>Add Visitors</h3>
<a href="<?php echo base_url('clerk/visitors_controller/index'); ?>" class="btn btn-default">Back</a>
<div class ="form_content">
<form action="<?php echo base_url('clerk/visitors_controller/submit') ?>" method="post" class="form-horizontal">
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
		<label for="church" class="class-md-2 text-right">Usual Church</label>
		<div class="col-md-3">
			<input type="text" name="text_church" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="church" class="class-md-2 text-right">Date</label>
		<div class="col-md-3">
			<input type="Date" name="text_date" class="form-control" required>
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