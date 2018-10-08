<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>church webpage</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/slide.js"></script>
</head>

<style type="text/css">

    
	body{
		background-color: white;
		
	}
	.body{
		border: 1px solid grey;
	
	}
	div.body{
		height: 600px;
	}

	.head1{
		margin-top: 40px;
		text-align: left;
		color: green;
		font-size: 10px;
		border: 1px solid grey;
		border-image: url("assets/images/sda logo1");

	}
	div.head1{
		height: 100px;
		width: 420px;
		margin-left: 200px;
		text-align: right;

	}
	.home{
		margin-top: 35px;
		margin-left:20px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}
	.clerk{
		margin-top: -5px;
		margin-left: 90px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}
	.steward{
		margin-top: -18px;
		margin-left: 220px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
			}
	.pastor{
		margin-top: -18px;
		margin-left: 300px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;

			}
	/*.personal{
		margin-top: -18px;
		margin-left: 430px;
		font-weight: normal;-----------------out
		font-style: italic;
		font-size: 15px;
	}*/

	.training{
		margin-top: -18px;
		margin-left: 430px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}

	.family{
		margin-top: -18px;
		margin-left: 510px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}
	.modules{
		border: 1px dotted grey;
		margin-left: 620px;
		margin-top: -100px;
	}
	div.modules{
	width: 660px;
	height: 70px;


	}
	.p{
		color: black;
		font-size: 20px;
	}
	.logo{
		border: 1px solid green;
		background-image: url("assets/images/sda logo2.jpg");

	}
	div.logo{
		height: 150px;
		width: 200px;
		background-position: center;

	}

	.run{
		border: 1px dotted orange;
	}

	div.run{
		height: 445px;
		width: 1330px;
		margin-top: 48px;
		margin-left: -622px;
	}

	
</style>


<body>

		<div class="body">
		<div class="logo">
			

	<div class="head1">	

<h6>SEVENTH DAY ADVENTIST CHURCH</h6>
<p <div class="p">Expanding the Kingdom of God, impacting lives <br> and lovingly embracing everyone</p></div>
	
	
	<div class="modules">
	<div class="home">
		
<a href="<?php echo site_url('controller/function/uri') ?>"  class="btn btn-primary" >HOME</a>
	</div>

	<div class="clerk">
<a href="<?php echo site_url('controller/function/uri') ?>" class="btn btn-primary" >CHURCH CLERK</a>
	</div>

	<div class="steward">
<a href="<?php echo site_url('controller/function/uri') ?>" class="btn btn-primary" >FINANCE</a>
	</div>

	<div class="pastor">
<a href="<?php echo site_url('controller/function/uri') ?>" class="btn btn-primary" >PASTORS OFFICE</a>
	</div>

	<!--<div class="personal">
<a href="<?php echo site_url('controller/function/uri') ?>">PERSONAL MINISTRY</a>
	</div>-->

	<div class="training">
<a href="<?php echo site_url('controller/function/uri') ?>" class="btn btn-primary" >TRAINING</a>
	</div>


	<div class="family">
<a href="<?php echo site_url('controller/function/uri') ?>"  class="btn btn-primary" >SOCIAL COMMITTEE</a>
	</div>	
	<div class="run">
</div>		
</div>		
</div>				
</div>
</body>	
</html>
