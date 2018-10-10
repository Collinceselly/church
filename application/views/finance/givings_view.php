<!DOCTYPE html>
<html>
<head>
	<title>members givings</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
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
	}

</style>
<body>
	<div class="h1"><h3>Treasurer <?php echo $this->session->userdata('FIRST_NAME')?></h3></div>
	<div class="logout"><a href="<?php echo base_url('TemplateController/index')?>">LOGOUT</a></div>
	<a href="<?php echo base_url('modules/treasury/index'); ?>" class="btn btn-primary">Back</a>
<div class="p1"><a href="<?php echo base_url('finance/givings/getMembers'); ?>" class="btn btn-primary">Record members' offerings for a Sabbath </a></div>


</body>
</html>