<!DOCTYPE html>
<html>
<head>
	<title>update records</title>
	
</head>
<body>
<p>All members Records</p>
	<?php

if(!empty($Members)){
	foreach ($members as $member); ?> {

<table>
	<tr>
		<td><strong>Nationa ID Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Names</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>Leadership post</strong></td><td><strong>phone Number</strong></td><td><strong>Email Address</strong></td><td><strong>Place of Residence</strong></td>
	</tr>
	<tr>
		<td><?=$member->ID_CARD_NUMBER;?></td><td><?=$member->FIRST_NAME;?></td><td><?=$member->OTHER_NAMES;?></td><td><?=$member->GENDER;?></td><td><?$member->OCCUPATION;?></td><td><?=$member->CHURC_LEADERSHIP_POST?></td><td><?$member->PHONE_NUMBER;?></td><td><?=$member->EMAIL_ADDRESS;?></td><td><?$member->RESIDENTIAL_ADDRESS;?></td>
	</tr>
	<?php }?>
</table>

	<!--}
}-->
	 

</body>
</html>