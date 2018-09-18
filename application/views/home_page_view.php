<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-color: #e6fffa;
	}
	.body{
		border: 1px solid grey;
		border-radius: 20px;
	}
	div.body{
		height: 550px;
		/*width: 1250px;*/
		margin-left: -100px;
		margin-right: -100px;
	}
	h3{
		text-align: center;
		color: #9999e6;
	}
	.logo{
		border: 1px solid green;
		border-radius: 20px;
		background-image: url("assets/images/sda logo2.jpg");
	}
	div.logo{
		height: 150px;
		width: 200px;
		background-position: center;
	}
	.head1{
		margin-top: -150px;
		text-align: left;
		color: green;
		font-size: 10px;
		border: 1px solid grey;
		border-image: url("assets/images/sda logo1");
		border-radius: 20px;
	}
	div.head1{
		height: 150px;
		width: 250px;
		margin-left: 200px;
		text-align: right;
	}
	.p{
		color: black;
		font-size: 12px;
		text-align: center;
	}
	.modules{
		border: 1px dotted grey;
		margin-left: 480px;
		margin-top: -500px;
		
	}
	div.modules{
	width: 850px;
	height: 70px;
	}
	.module_content{
		align-content: center;
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
.slide{
	border: 1px solid grey;
}
div.slide{
	border-radius: 10px;
	height: 390px;
	width: 1300px;
	margin-left: 20px;
}
.rotate{
	height: 390px;
	width: 1300px;
}
</style>
<body>

		<div class="body">

		<div class="logo">
			</div>

	<div class="head1">	

<h3>SEVENTH DAY ADVENTIST CHURCH</h3>
<p <div class="p">Expanding the Kingdom of God, <br>impacting lives and  <br>  lovingly embracing everyone.</p></div>
<div class="slide">

	<!--<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="rotate"> <img src="assets/images/pic1.jpg" alt="First Slide"></div>
                <div class="carousel-caption">
                <h3>First Slide</h3>
                <p>Chiromo Gents Sabbath</p>
            </div>
            </div>
            <div class="item">
                <img src="assets/images/2.jpg" alt="Second Slide">
                <div class="carousel-caption">
                <h3>Second Slide</h3>
                <p>Chiromo Leavers Sabbath</p>
            </div>
            </div>
            <div class="item">
                <img src="assets/images/3.jpg" alt="Third Slide">
                <div class="carousel-caption">
                <h3>Third Slide</h3>
                <p>Lower Kabete Overall Sabbath</p>
            </div>
            </div>
            <div class="item">
                <img src="assets/images/4.jpg" alt="Fourth Slide">
                <div class="carousel-caption">
                <h3>Fourth Slide</h3>
                <p>Chiromo Leavers Sabbath</p>
            </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>-->

	
	
</div>			
			<div class="modules"> 
				<div class="module_content">
					
<a href="<?php echo base_url('HomePage'); ?>" class="btn btn-primary">HOME</a>
<a href="<?php echo base_url('TrialController/add'); ?>" class="btn btn-primary">ABOUT US</a>
<div class="dropdown">
  <button class="btn btn-primary">SERVICES</button>
  <div class="dropdown-content">
    <a href="Login/process_login">CHURCH CLERK</a>
    <a href="Login/process_login">TREASURY/FINANCE DEPARTMENT</a>
    <a href="Login/process_login">PASTORS OFFICE</a>
    <a href="Login/process_login">TRAINING DEPARTMENT</a>
    <a href="Login/process_login">SOCIAL COMMITTEE</a>
    <a href="Login/process_login">PERSONAL MINISTRY</a>
    <a href="#">CHURCH MEMBERS</a>
  </div>
</div>
<a href="<?php echo base_url('Trial/add'); ?>" class="btn btn-primary">PRODUCTS</a>
<a href="<?php echo base_url('Trial/add'); ?>" class="btn btn-primary">PROJECTS</a>
<a href="<?php echo base_url('Trial/add'); ?>" class="btn btn-primary">GALLERY</a>
<a href="<?php echo base_url('Trial/add'); ?>" class="btn btn-primary">CONTACT US</a>
				</div>
			</div>
		</div>

</body>
</html>
