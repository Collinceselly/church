<!doctype html>
<html>
<head>
	<title>Members Registration form</title>
</head>
<style type="text/css">
	

</style>
<body>

	<h1>Register Members</h1>

	<!--<form action="<?php echo base_url()."church_clerk_controller/RegisterMembers"?> method="post">-->
		<?php echo form_open('church_clerk_controller/RegisterMembers'); ?>
		<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right" for="name">Id Number</label>
					<div class="col-sm-5">
					  <input type="text" name="id_no" class="form-control" value="<?php echo set_value('ID_CARD_NUMBER'); ?>" placeholder="Enter id card number" id="idno">
					</div>
				</div>

				<label class="control-label col-sm-4 text-right" for="name">first Name</label>
					<div class="col-sm-5">
					  <input type="text" name="first_name" class="form-control" value="<?php echo set_value('FIRST_NAME'); ?>" placeholder="Enter first name" id="firstname">
					</div>
				</div>

				<label class="control-label col-sm-4 text-right" for="name">other names</label>
					<div class="col-sm-5">
					  <input type="text" name="other_names" class="form-control" value="<?php echo set_value('OTHER_NAMES'); ?>" placeholder="Enter the other name" id="othername">
					</div>
				</div>

				<label class="control-label col-sm-4 text-right" for="name">Gender</label>
					<div class="col-sm-5">
					  <input type="text" name="gender" class="form-control" value="<?php echo set_value('GENDER'); ?>" placeholder="select gender" id="gender">
					</div>
				</div>

				<label class="control-label col-sm-4 text-right" for="name">Occupation</label>
					<div class="col-sm-5">
					  <input type="text" name="occupation" class="form-control" value="<?php echo set_value('OCCUPATION'); ?>" placeholder="Enter occupation" id="occupation">
					</div>
				</div>

				<label class="control-label col-sm-4 text-right" for="name">Email Address</label>
					<div class="col-sm-5">
					  <input type="text" name="email_address" class="form-control" value="<?php echo set_value('E-MAIL_ADDRESS'); ?>" placeholder="Enter email address" id="email">
					</div>
				</div>

				<label class="control-label col-sm-4 text-right" for="name">phone Number</label>
					<div class="col-sm-5">
					  <input type="text" name="phone_number" class="form-control" value="<?php echo set_value('PHONE_NUMBER'); ?>" placeholder="Enter phone number" id="phonenumber">
					</div>
				</div>

				<label class="control-label col-sm-4 text-right" for="name">residential Address</label>
					<div class="col-sm-5">
					  <input type="text" name="residential_address" class="form-control" value="<?php echo set_value('RESIDENTIAL_ADDRESS'); ?>" placeholder="Enter residential address" id="residential address">
					</div>
				</div>

				<div class="form-group custom-bottom-margin">
					<label class="control-label col-sm-4 text-right"></label>
					<div class="col-sm-5">
					  <button class="btn btn-primary" type="submit"> Submit</button>
					</div>
				</div>

</form>
			

</body>
</html>