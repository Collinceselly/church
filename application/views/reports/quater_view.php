<!DOCTYPE html>
<html>
<head>
	<title>
		select type
	</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
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
    text-align: center;
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
.pos{
	text-align: center;
}
</style>
<body>
	<a href="<?php echo base_url('clerk/visitors_controller/index'); ?>" class="btn btn-primary">Back</a>
	<div class="p1"><p>Choose the report creterion from the dropdown</p></div>
<div class="pos">
	<div class="dropdown"><br>
  <div class="members_record"><button class="btn btn-primary">WHICH QUATER</button></div>
  <div class="dropdown-content">
    <a href="<?php echo base_url('reports/individual_tithes_report_controller/firstQuater'); ?>">FIRST QUATER</a>
    <a href="<?php echo base_url('reports/individual_tithes_report_controller/secondQuater'); ?>">SECOND QUATER</a>
    <a href="<?php echo base_url('clerk/search_by_date_range_controller/thirdQuater'); ?>">THIRD QUATER</a>
    <a href="<?php echo base_url('clerk/search_by_date_range_controller/fourthQuater'); ?>">FOURTH QUATER</a>
  </div>
</div><br>
</div>

</body>
</html>