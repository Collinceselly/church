<!DOCTYPE html>
<html>
<head>
	<title>clerk</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
body{
	background-color: #e6fffa;
}
	.h1{
		text-align: center;
		align-content: center;
		color: green;
	}
	.logout{
		text-align: right;
		font-size: 20px;
		margin-right: 100px;
		margin-top: 5px;
	}
	.p1{
		text-align: center;
		margin-top: -5px;
		font-size: 25px;
	}
	.activities{
		border: 1px solid grey;
		border-radius: 20px;
	}
	div.activities{
		height: 350px;
		width: 700px;
		margin-left: 350px;
		text-align: center;

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
	<div class="h1"><h1>Welcome  Clerk <?php echo $this->session->userdata('FIRST_NAME')?></h1></div>
	<div class="logout"><a href="<?php echo base_url('login_controller/logout')?>">LOGOUT</a></div>
	<div class="p1"><p>Please choose the activity you would like to perform from the list below</p></div>
	<div class=activities>
<div class="dropdown"><br>
  <div class="members_record"><button class="btn btn-primary">MEMBERS RECORDS</button></div>
  <div class="dropdown-content">
    <a href="<?php echo base_url('clerk/adults_controller/index'); ?>">ADULTS RECORDS</a>
    <a href="<?php echo base_url('clerk/children_controller/index'); ?>">CHILDREN RECORDS</a>
    <a href="<?php echo base_url('clerk/visitors_controller/index'); ?>">VISITORS RECORDS</a>
  </div>
</div><br>


<div class="members_record"><a href="<?php echo base_url('clerk/search_m_controller/index'); ?>" class="btn btn-primary">MEMBERS TRANSFER PROCESS</a><br></div>
<div class="members_record"><a href="<?php echo base_url('clerk/baptismal_records_controller/index'); ?>" class="btn btn-primary">BAPTISIMAL RECORDS</a><br></div>
<div class="members_record"><a href="<?php echo base_url('clerk/adults_controller/add'); ?>" class="btn btn-primary">BABY DEDICATION RECORDS</a><br></div>
<div class="members_record"><a href="<?php echo base_url('/clerk/adults_controller/add'); ?>" class="btn btn-primary">MARRIAGE NOTIFICATIONS</a><br></div>
		</div>
	</div>
</body>
</html>