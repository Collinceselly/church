<!DOCTYPE html>
<html>
<head>
    <title>church app</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/chartist.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/buttons.dataTables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-datetimepicker.min.css')?>">
    
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery-1.12.4.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.mask.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/chartist.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/moment.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap-datetimepicker.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.buttons.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/buttons.flash.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jszip.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/pdfmake.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vfs_fonts.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/buttons.html5.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/buttons.print.min.js')?>"></script>

</head>
<style type="text/css">
	.container{
		width: 1350px;
	}
	.search_button{
		margin-left: 1000px;
		margin-top: -20px;
	}
	.search1{
		text-align: center;
		color: #ffb3ff;
	}
	.gender{
		text-align: right;
		margin-right: 970px;
	}
	.R{
		text-align: center;
	}
	.h1{
		text-align: right;
		align-content: center;
		color: black;
		font-weight: 25px;
	}
	.logout{
		text-align: right;
		font-size: 15px;
		margin-right: 100px;
		margin-top: 5px;
	}
	body{
		background-color: #99ff99;
	}
</style>
<body>
<!--<div class="navbar navbar-default">
	<div class="container">
		<h2><span class="glyphicon glyphicon-home"></span>&nbsp;WELCOME</h2>
	</div>
</div>-->
</style>
<body>
<div class="navbar navbar-default">
	<div class="container">
		<p>
			<?php if (isset($_SESSION['user_details'])) {?>
				<a href="<?php echo base_url('Portal/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
			<?php  } ?>
		</p>
	</div>

</div>
