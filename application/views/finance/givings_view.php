<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
	<title>members givings</title>
=======
<!DOCTYPE html>
<html>
<head>
	<title>personal givings</title>
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
<<<<<<< HEAD
body{
	background-color: #99ff99;
}
	.p1{
		text-align: center;
		margin-top: 200px;
		font-size: 20px;
	}
	.h1{
		text-align: right;
		align-content: center;
		color: black;
		font-weight: 25px;
	}
	.logout{
		text-align: right;
		font-size: 20px;
		margin-right: 100px;
		margin-top: 5px;
=======
	.p1{
		text-align: center;
		margin-top: 20px;
		font-size: 20px;
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
	}

</style>
<body>
<<<<<<< HEAD
	<div class="h1"><h3>Treasurer <?php echo $this->session->userdata('FIRST_NAME')?></h3></div>
	<div class="logout"><a href="<?php echo base_url('TemplateController/index')?>">LOGOUT</a></div>
	<a href="<?php echo base_url('modules/treasury/index'); ?>" class="btn btn-primary">Back</a>
<div class="p1"><a href="<?php echo base_url('finance/givings/getMembers'); ?>" class="btn btn-primary">Record members' offerings for a Sabbath </a></div>
=======
<div class="p1"><a href="<?php echo base_url('finance/givings/getMembers'); ?>" class="btn btn-primary">Record members' givings for a given Sabbath </a></div>
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96

</body>
</html>