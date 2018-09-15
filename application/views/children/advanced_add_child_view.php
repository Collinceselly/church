<h3>Parents Details</h3>
<a href="<?php echo base_url('children_controller/index'); ?>" class="btn btn-primary">Back</a>
<form action="<?php echo base_url('advanced_add_child_controller/advancedSubmit') ?>" method="post" class="form-horizontal">
	<input type="hidden" name="text_hidden" value="<?php echo $members->ID;?>" >
	
	
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">ID Card Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->ID_CARD_NUMBER;?>" name="text_idno" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->FIRST_NAME;?>" name="text_fname" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="oname" class="class-md-2 text-right">Other Names</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->OTHER_NAMES;?>" name="text_oname" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->GENDER;?>" name="text_gender" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Phone Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->PHONE_NUMBER;?>" name="text_phone" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="email" class="class-md-2 text-right">Email Address</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->EMAIL_ADDRESS;?>" name="text_email" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="residence" class="class-md-2 text-right">Place of Residence</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->RESIDENTIAL_ADDRESS;?>" name="text_residence" readonly="true" class="form-control" required>
		</div>
		<h3>Add Children Details</h3>
	</div>
	<div class ="form-group">
		<label for="cfname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" name="text_cfname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="coname" class="class-md-2 text-right">Other Names</label>
		<div class="col-md-3">
			<input type="text" name="text_coname" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" name="text_cgender" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="baptized" class="class-md-2 text-right">Baptized</label>
		<div class="col-md-3">
			<input type="text" name="text_baptized" class="form-control" required>
		</div>
	</div>


	<div class ="form-group">
		<label class="class-md-2 text-right"></label>
		<div class="col-md-3">
			<input type="submit" name="btnUpdate" class="btn btn-primary" value="submit">
		</div>
	</div>
</form>