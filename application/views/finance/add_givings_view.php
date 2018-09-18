<h3>Members Details</h3>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="http://code.jquery.com/jquery-1.12.4.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<body>
<a href="<?php echo base_url('children/index'); ?>" class="btn btn-primary">Back</a>
<form action="<?php echo base_url('finance/givings/submitRecord') ?>" method="post" id="givings" class="form-horizontal">
	<input type="hidden" name="text_hidden" value="<?php echo $members->ID;?>" >
	
	
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">ID Card Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->ID_CARD_NUMBER;?>" name="text_idno" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="fname" class="class-md-2 text-right">First Name</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->FIRST_NAME;?>" name="text_fname" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="oname" class="class-md-2 text-right">Other Names</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->OTHER_NAMES;?>" name="text_oname" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Gender</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->GENDER;?>" name="text_gender" readonly="true" class="form-control" required>
		</div>
	</div>
	<div class ="form-group">
		<label for="phone" class="class-md-2 text-right">Phone Number</label>
		<div class="col-md-3">
			<input type="text" value="<?php echo $members->PHONE_NUMBER;?>" name="text_phone" readonly="true" class="form-control" required>
		</div>
	</div>
	
		<h3>Add Offerings in KShs</h3>
	</div>
	<div class ="form-group">
		<label for="cfname" class="class-md-2 text-right">Sabbath date</label>
		<div class="col-md-3">
			<input type="date" name="text_date" class="form-control text-right" required/>
		</div>
	</div>
	<div class ="form-group">
		<label for="cfname" class="class-md-2 text-right">God's Tithe 10%</label>
		<div class="col-md-3">
			<input type="text" name="text_tithe" class="form-control text-right amount" required/>
		</div>
	</div>
	<div class ="form-group">
		<label for="coname" class="class-md-2 text-right">Combined Offerings 10% +</label>
		<div class="col-md-3">
			<input type="text" name="text_combined" class="form-control text-right amount" required/>
		</div>
	</div>
	<div class ="form-group">
		<label for="gender" class="class-md-2 text-right">Camp Meeting Offerings</label>
		<div class="col-md-3">
			<input type="text" name="text_camp" class="form-control text-right amount" required/>
		</div>
	</div>
	<div class ="form-group">
		<label for="baptized" class="class-md-2 text-right">Church Building/Development</label>
		<div class="col-md-3">
			<input type="text" name="text_building" class="form-control text-right amount" required/>
		</div>
	</div>
	<div class ="form-group">
		<label for="baptized" class="class-md-2 text-right">Evangelism(Outreach) (i) Conference</label>
		<div class="col-md-3">
			<input type="text" name="text_conference" class="form-control text-right amount" required/>
		</div>
	</div>
	<div class ="form-group">
		<label for="baptized" class="class-md-2 text-right">Evangelism(Outreach) (ii) Local Church</label>
		<div class="col-md-3">
			<input type="text" name="text_local" class="form-control text-right amount" required/>
		</div>
	</div>
	<div class ="form-group">
		<label for="baptized" class="class-md-2 text-right">Station Development Funds (200.00)</label>
		<div class="col-md-3">
			<input type="text" name="text_station" class="form-control text-right amount" required/>
		</div>
	</div>

	<div class ="form-group">
		<label class="class-md-2 text-right">Total Amount</label>
		<div class="col-md-3">
			<input type="text" name="text_total" class="form-control input-sm text-right" readonly id="total_amount">
		</div>
	</div>

	<div class ="form-group">
		<!--<label for="phone" class="class-md-2 text-right">KEY</label>-->
		<div class="col-md-3">
			<input type="hidden" value="<?php echo $members->ID;?>" name="text_fk" readonly="true" class="form-control" required>
		</div>
	</div>


	<div class ="form-group">
		<label class="class-md-2 text-right"></label>
		<div class="col-md-3">
			<input type="submit" name="btnUpdate" class="btn btn-primary" value="submit" >
		</div>
	</div>

	
</form>

<!--<script src = "href="<?php echo base_url('assets/jquery/jquery.min.js') ?>""></script>
<script type="text/javascript">
	
	$('.form-group').on('input','.prc',function(){
		var totalSum = 0;
		$('.form-group .prc').each(function(){
			var inputVal = $(this).val();
			if($.isNumeric(inputVal)){
				totalSum += parseFloat(inputVal);
			}
		});
		$('#result').text(totalSum);
	});
</script>-->
</body>
<script type="text/javascript">
	$(function(){
		$('.amount').mask('#,###.##',{reverse : true});

		var total_amount = function(){
			var sum=0;

			$('.amount').each(function(){
				var num = $(this).val().replace(',','');

				if(num != 0){
					sum += parseFloat(num);
				}
			});
			$('#total_amount').val(sum.toFixed(2));
		}
		$('.amount').keyup(function(){

			total_amount();
		});
	});
</script>

<!--<script type="text/javascript">
	
	function titheAmount(){
		var getTithe=0;
		var theForm = document.forms['givings'];
		var tithe = theForm.elements['text_tithe'];
		var howMuch = 0;
		if(text_tithe.value)!=""
		{
			howMuch=parseInt(text_tithe.value);
		}
		return howMuch
	}

	function combinedAmount(){
		var getTithe=0;
		var theForm = document.forms['givings'];
		var tithe = theForm.elements['text_combined'];
		var howMuch = 0;
		if(text_combined.value)!=""
		{
			howMuch=parseInt(text_combined.value);
		}
		return howMuch
	}

	function campAmount(){
		var getTithe=0;
		var theForm = document.forms['givings'];
		var tithe = theForm.elements['text_camp'];
		var howMuch = 0;
		if(text_camp.value)!=""
		{
			howMuch=parseInt(text_camp.value);
		}
		return howMuch
	}

	function buildingAmount(){
		var getTithe=0;
		var theForm = document.forms['givings'];
		var tithe = theForm.elements['text_building'];
		var howMuch = 0;
		if(text_building.value)!=""
		{
			howMuch=parseInt(text_building.value);
		}
		return howMuch
	}

	function conferenceAmount(){
		var getTithe=0;
		var theForm = document.forms['givings'];
		var tithe = theForm.elements['text_conference'];
		var howMuch = 0;
		if(text_conference.value)!=""
		{
			howMuch=parseInt(text_conference.value);
		}
		return howMuch
	}

	function localAmount(){
		var getTithe=0;
		var theForm = document.forms['givings'];
		var tithe = theForm.elements['text_local'];
		var howMuch = 0;
		if(text_local.value)!=""
		{
			howMuch=parseInt(text_local.value);
		}
		return howMuch
	}

	function stationAmount(){
		var getTithe=0;
		var theForm = document.forms['givings'];
		var tithe = theForm.elements['text_station'];
		var howMuch = 0;
		if(text_station.value)!=""
		{
			howMuch=parseInt(text_station.value);
		}
		return howMuch
	}

	function calculateTotal(){
		var totalPaid = titheAmount() + combinedAmount() + campAmount() + buildingAmount() + conferenceAmount() + localAmount() + stationAmount();

		var divobj = document.getElementById('totalamount');
    	divobj.style.display='block';
    	divobj.innerHTML = "Total Offerings is $"+totalPaid;
	}

	function hideTotal()
{
    var divobj = document.getElementById('totalamount');
    divobj.style.display='none';
}

</script>-->