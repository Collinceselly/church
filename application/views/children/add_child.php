<h3>Add a child</h3>
<a href="<?php echo base_url('clerk/children/index'); ?>" class="btn btn-default">Back</a>
<div class ="form_content">
<form action="<?php echo base_url('clerk/children/submit') ?>" method="post" class="form-horizontal">
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" name="text_fname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="oname" class="class-md-2 text-right">Other Name</label>
		<div class="col-md-3">
			<input type="text" name="text_oname" class="form-control" required>
		</div>
	</div>
	<!--<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" name="text_gender" class="form-control" required>
		</div>
	</div>-->
	<div class="form-group">
		<div class="gender"><label for="gender" class="class-md-2 text-right">Gender</label></div>
			<input type="radio" name="text_gender" value="Male">Male
			<input type="radio" name="text_gender" value="Female">Female
	</div>
	<div class="form-group">
		<div class="gender"><label for="baptized" class="class-md-2 text-right">Baptized</label></div>
			<input type="radio" name="text_baptized" value="Yes">yes
			<input type="radio" name="text_baptized" value="No">No
	</div>
	<!--<div class ="form-group">
		<label for="baptized" class="class-md-2 text-right">Baptized</label>
		<div class="col-md-3">
			<input type="text" name="text_baptized" class="form-control" required valid_email>
		</div>-->
	</div>
	<div class ="form-group">
		<label for="ffname" class="class-md-2 text-right">Father's First Names</label>
		<div class="col-md-3">
			<input type="text" name="text_ffname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="flname" class="class-md-2 text-right">Father's Last Names</label>
		<div class="col-md-3">
			<input type="text" name="text_flname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="mfname" class="class-md-2 text-right">Mother's First Names</label>
		<div class="col-md-3">
			<input type="text" name="text_mfname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="mlname" class="class-md-2 text-right">Mother's Last Names</label>
		<div class="col-md-3">
			<input type="text" name="text_mlname" class="form-control" required>
		</div>
	</div>
	
		<div class ="form-group">
		<label for="fid" class="class-md-2 text-right">Father's ID Number</label>
		<div class="col-md-3">
			<input type="text" name="text_fid" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="mid" class="class-md-2 text-right">Mother's ID Number</label>
		<div class="col-md-3">
			<input type="text" name="text_mid" class="form-control" required>
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