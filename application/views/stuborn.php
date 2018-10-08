</body>
<body>
<div id="container">
<div id="wrapper">
<h1>Update Data In Database Using CodeIgniter </h1><hr/>
<div id="menu">
<p>Click On Menu</p>
<!-- Fetching Names Of All Students From Database -->
<?php if(isset($status)){?>

<?php}?>
<p>Click on the members you want to edit</p>
<ol>

<?php foreach($members as $member): ?>
<li><a href="<?php echo base_url() . "update_controller/show_member_id/" . $members->ID_CARD_NUMBER; ?>"><?php echo $members->ID_CARD_NUMBER; ?></a></li>
}
<?php endforeach; ?>
</div>
<div id="detail">
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
</ol>
<?php foreach($single_member as $member): ?>
<p>Edit Detail & Click Update Button</p>
<form role="form" action="<?php base_url();?> update_controller/update_members_id1" method="post"?>
<label id="hide">ID CARD NUMBER :</label>
<input type="text" id="idno" name="idno" value="<?php echo $members->ID_CARD_NUMBER; ?>">
<label>FIRST NAME :</label>
<input type="text" name="fname" value="<?php echo $members->FIRST_NAME; ?>">
<label>OTHER NAMES :</label>
<input type="text" name="oname" value="<?php echo $members->OTHER_NAMES; ?>">
<label>GENDER :</label>
<input type="text" name="gender" value="<?php echo $members->GENDER; ?>">
<label>OCCUPATION :</label>
<input type="text" name="occupation" value="<?php echo $members->OCCUPATION; ?>">
<label>CHURCH LEADERSHIP POST :</label>
<input type="text" name="post" value="<?php echo $members->CHURCH_LEADERSHIP_POST; ?>">
<label>PHONE NUMBER :</label>
<input type="text" name="phone" value="<?php echo $members->PHONE_NUMBER; ?>">
<label>EMAIL ADDRESS :</label>
<input type="text" name="email" value="<?php echo $members->EMAIL_ADDRESS; ?>">
<label>RESIDENTIAL ADDRESS :</label>
<input type="text" name="address" value="<?php echo $members->RESIDENTIAL_ADDRESS; ?>">

<input type="submit" id="submit" name="dsubmit" value="Update" >
</form>
<?php endforeach; ?>
</div>
</ol>
</div>
</div>
</body>
</html>
