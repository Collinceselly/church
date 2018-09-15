<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>get total sum of records</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="http://code.jquery.com/jquery-1.12.4.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
</head>
<body>
	<br>
 <div class="container">

 	<div class="row">
 		<div class="col-md-8">
 			<label class="control-label col-md-2">Date:</label>
 			<div class="col-md-4">
 				<input type="date" class="form-control input-sm text-right">
 			</div>
 		</div>
 		
 	</div>

 	<div class="row">
 		<div class="col-md-8">
 			<label class="control-label col-md-2">Name:</label>
 			<div class="col-md-4">
 				<input type="text" class="form-control input-sm text-right">
 			</div>
 		</div>
 		
 	</div>


 	<div class="row">
 		<div class="col-md-8">
 			<label class="control-label col-md-2">Amount 1:</label>
 			<div class="col-md-4">
 				<input type="text" class="form-control input-sm text-right amount">
 			</div>
 		</div>
 		
 	</div>
 	<br>

 	<div class="row">
 		<div class="col-md-8">
 			<label class="control-label col-md-2">Amount 2:</label>
 			<div class="col-md-4">
 				<input type="text" class="form-control input-sm text-right amount">
 			</div>
 		</div>
 		
 	</div>
 	<br>

 	<div class="row">
 		<div class="col-md-8">
 			<label class="control-label col-md-2">Amount 3:</label>
 			<div class="col-md-4">
 				<input type="text" class="form-control input-sm text-right amount">
 			</div>
 		</div>
 		
 	</div>
 	<br>
 	<div class="row">
 		<div class="col-md-8">
 			<label class="control-label col-md-2">Total:</label>
 			<div class="col-md-4">
 				<input type="text" class="form-control input-sm text-right" readonly id="total_amount">
 			</div>
 		</div>
 		
 	</div>
 	<br>
 </div>
</body>

<script type="text/javascript">
	$(function(){
		$('.amount').mask('###,###,###.##',{reverse : true});

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

</html>