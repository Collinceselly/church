<!DOCTYPE html>
<html>
<head>
	<title>treasury</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
body{
	background-color: #99ff99;
	/* background-image: url("assets/images/sda logo4.jpg");*/
}
	.h1{
		text-align: right;
		align-content: center;
		color: black;
		font-weight: 25px;
	    /*background-color: #e6fffa;*/
    }
	.logout{
		text-align: right;
		font-size: 20px;
		margin-right: 100px;
		margin-top: 5px;
	}
	.p1{
		text-align: center;
		margin-top: 100px;
		font-size: 25px;
	}
	.activities{
		border: 1px solid grey;
		border-radius: 20px;
	}
	div.activities{
		height: 105px;
		width: 300px;
		margin-left: 550px;
		text-align: center;
		margin-top: 30px;

	}
		.dropbtn {
    background-color: red;
    color: white;
    padding: 16px;
    font-size: 13px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.members_record{
	padding: 10px;
}

</style>
<body>
	<div class="h1"><h3>Treasurer <?php echo $this->session->userdata('FIRST_NAME')?></h3></div>
	<div class="logout"><a href="<?php echo base_url('TemplateController/index')?>">LOGOUT</a></div>
	<div class="p1"><p>choose activity</p></div>
	<div class=activities>
<!--<div class="dropdown"><br>
  <div class="members_record"><button class="btn btn-primary">MEMBERS RECORDS</button></div>
  <div class="dropdown-content">
    <a href="<?php //echo base_url('trial/index'); ?>">ADULTS RECORDS</a>
    <a href="<?php// echo base_url('children_controller/index'); ?>">CHILDREN RECORDS</a>
    <a href="<?php //echo base_url('visitors_controller/index'); ?>">VISITORS RECORDS</a>
  </div>
</div><br>-->

<div class="members_record"><a href="<?php echo base_url('finance/givings/index'); ?>" class="btn btn-primary">TITHES AND OFFERINGS</a><br></div>
<div class="members_record"><a href="<?php echo base_url('reports/individualTithesReport/selectType'); ?>" class="btn btn-primary">FINANCIAL REPORT</a><br></div>
<!--<div class="members_record"><a href="<?php echo base_url('trial/add'); ?>" class="btn btn-primary">BOOKING AND PAYMENT OF HIRED CHURCH FACILITIES</a><br></div>
<div class="members_record"><a href="<?php echo base_url('trial/add'); ?>" class="btn btn-primary">REPORT TO THE CONFERENCE</a><br></div>
		</div>-->
<!-- <div class="members_record"><a href="<?php echo base_url('finance/givings/index'); ?>" class="btn btn-primary">PERSONAL AND CORPERATE GIVINGS</a><br></div>
<div class="members_record"><a href="<?php echo base_url('reports/individualTithesReport/selectType'); ?>" class="btn btn-primary">CHURCH MEMBERS FINANCIAL REPORT</a><br></div>
<div class="members_record"><a href="<?php echo base_url('trial/add'); ?>" class="btn btn-primary">BOOKING AND PAYMENT OF HIRED CHURCH FACILITIES</a><br></div>
<div class="members_record"><a href="<?php echo base_url('trial/add'); ?>" class="btn btn-primary">REPORT TO THE CONFERENCE</a><br></div> -->
		</div>
	
</body>
</html>