<h3>Edit Children Records</h3>
<a href="<?php echo base_url('clerk/children_controller/index'); ?>" class="btn btn-primary">Back</a>
<form action="<?php echo base_url('clerk/children_controller/update') ?>" method="post" class="form-horizontal">
	<input type="hidden" name="text_hidden" value="<?php echo $members->ID;?>" >
	
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->C_FIRST_NAME;?>" name="text_fname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="oname" class="class-md-2 text-right">Other Names</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->C_OTHER_NAMES;?>" name="text_oname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->GENDER;?>" name="text_gender" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="occupation" class="class-md-2 text-right">Baptized</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->BAPTIZED;?>" name="text_baptized" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="post" class="class-md-2 text-right">Father's First Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->FATHER_FNAME;?>" name="text_ffname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Father's Last Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->FATHER_LNAME;?>" name="text_flname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Mother's First Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->MOTHER_FNAME;?>" name="text_mfname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Mother's Last Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->MOTHER_LNAME;?>" name="text_mlname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="email" class="class-md-2 text-right">Father's ID Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->FATHER_IDNO;?>" name="text_fid" class="form-control" required>
		</div>
	</div>
		<div class ="form-group">
		<label for="address" class="class-md-2 text-right">Mother's ID Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->MOTHER_IDNO;?>" name="text_mid" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label class="class-md-2 text-right"></label>
		<div class="col-md-3">
			<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
		</div>
	</div>
</form>