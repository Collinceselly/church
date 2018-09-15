<!DOCTYPE html>
<html>
<head>
	<title>selection option</title>
</head>
<body>
<?php 
if(isset($read_set_value)){
	echo $read_set_value;
}
if(isset($message_display)){
	echo $message_display;
}

?>
<h2>select by ID</h2>
<?php 
echo form_open('select_controller/select_by_id');
echo form_label('Select By ID : ');
$data = array(
'name' => 'id',
'placeholder' => 'Please Enter ID'
);
echo form_input($data);
//echo "<'div class='error_msg'>";
if(isset($id_error_message)) {
	echo $id_error_message;
}
echo form_submit('submit', 'Show Records');
echo form_close();

?>
<?php
if(isset($result_display)){
	echo "<p><u>result</u><p>";
	if($result_display == 'No records found !'){
		echo $result_display;
	}
	else{
		echo "<tr><th>ID CARD NUMBER</th><th>FIRST NAME</th><th>OTHER NAMES</th><th>GENDER</th><th>OCCUPATION</th><th>POST HELD</th><th>PHONE NUMBER</th><th>EMAIL ADDRESS</th><th>PLACE OF RESIDENCE</th></tr>";

		foreach($result_display as $value){

			echo "<tr>" . "<td class='e_id'>" . $value->ID_CARD_NUMBER . "</td>" . "<td>" . $value->FIRST_NAME . "</td>" . "<td>" . $value->OTHER_NAMES . "</td>" . "<td>" . $value->GENDER . "</td>" . "<td>" . $value->OCCUPATION . "</td>" . "<td>" . $value->CHURCH_LEADERSHIP_POST . "</td>" . "<td>" . $value->PHONE_NUMBER . "</td>" . "<td>" . $value->EMAIL_ADDRESS . "</td>" . "<td>" . $value->RESIDENTIAL_ADDRESS . "</td>" . "</tr>";
		}

		echo '</table>';


		
	}
}

 ?>
</body>
</html>