<!DOCTYPE html>
<head>
<title>Update Data In Database Using CodeIgniter</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/update.css" ?>">
</head>

<style type="text/css">
	
	#container {
width:622px;
height:610px;
margin:50px auto
}
#wrapper {
width:520px;
padding:0 50px 20px;
background:linear-gradient(#fff,#AFEBD8);
border:1px solid #ccc;
box-shadow:0 0 5px;
font-family:'Marcellus',serif;
float:left;
margin-top:10px
}
#menu {
float:left;
width:200px;
margin-top:-30px
}
#detail {
float:left;
width:320px;
margin-top:-27px
}
a {
text-decoration:none;
color:blue
}
a:hover {
color:red
}
li {
padding:4px 0
}
h1 {
text-align:center;
font-size:28px
}
hr {
border:0;
border-bottom:1.5px solid #ccc;
margin-top:-10px;
margin-bottom:30px
}
#hide {
display:none
}
form {
margin-top:-40px
}
label {
font-size:17px
}
input {
width:100%;
padding:8px;
margin:5px 0 15px;
border:none;
box-shadow:0 0 5px
}
input#submit {
margin-top:10px;
font-size:18px;
background:linear-gradient(#22abe9 5%,#36caf0 100%);
border:1px solid #0F799E;
color:#fff;
font-weight:700;
cursor:pointer;
text-shadow:0 1px 0 #13506D
}
input#submit:hover {
background:linear-gradient(#36caf0 5%,#22abe9 100%)
}
p {
font-size:18px;
font-weight:700;
color:#18af0b
}
</style>
<body>
			<h1>All members Records</h1>

	<?php if(isset($status)){?>

	 <table>
	 	<tr>
	 			<td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td>
	 	</tr>
               
	<p>Click on the Member you want to Edit</p>
		<?php 

		if(!empty($members)){

		foreach($members as $member): ?>

			<tr><td><?=$member->ID_CARD_NUMBER;?></td><td><?=$member->FIRST_NAME;?></td><td><?=$member->OTHER_NAMES;?></td><td><?=$member->GENDER;?></td><td><?=$member->OCCUPATION;?></td><td><?=$member->CHURCH_LEADERSHIP_POST;?></td><td><?=$member->PHONE_NUMBER;?></td><td><?=$member->EMAIL_ADDRESS;?></td><td><?=$member->RESIDENTIAL_ADDRESS;?></td></tr> 

		<?php endforeach ?>
	</table>
	
	<?php }?>
	
	<?php }?>
	<div id="detail">
		<?php 

		if(!empty($single_member)){
		foreach($single_member as $member): ?>{
			<p>Edit Details and Click Update Button</p>
			<form role="form" action="<?php base_url();?> update_controller/update_members_id1" method ="post">
				<label id="hide">ID CARD NUMBER :</label>
				<input type="text" name="idno" id="idno" value="<?php echo $member->ID_CARD_NUMBER; ?>">

				<label id="hide">FIRST NAME :</label>
				<input type="text" name="fname" id="fname" value="<?php echo $member->FIRST_NAME; ?>">

				<label id="hide">OTHER NAMES :</label>
				<input type="text" name="oname" id="oname" value="<?php echo $member->OTHER_NAMES; ?>">

				<label id="hide">GENDER :</label>
				<input type="text" name="gender" id="gender" value="<?php echo $member->GENDER; ?>">

				<label id="hide">OCCUPATION :</label>
				<input type="text" name="occupation" id="occupation" value="<?php echo $member->OCCUPATION; ?>"> 

				<label id="hide">CHURCH LEADERSHIP POST :</label>
				<input type="text" name="post" id="post" value="<?php echo $member->CHURCH_LEADERSHIP_POST; ?>">

				<label id="hide">PHONE NUMBER :</label>
				<input type="text" name="phone" id="phone" value="<?php echo $member->PHONE_NUMBER; ?>">

				<label id="hide">EMAIL ADDRESS :</label>
				<input type="text" name="email" value="<?php echo $member->EMAIL_ADDRESS; ?>">

				<label id="hide">RESIDENTIAL ADDRESS :</label>
				<input type="text" name="address" value="<?php echo $member->RESIDENTIAL_ADDRESS; ?>">

				<input type="submit" name="submit" value="Update">
			</form>
		<?php endforeach; ?>
		}
		<?php }?>
			</div>
</body>
</html>