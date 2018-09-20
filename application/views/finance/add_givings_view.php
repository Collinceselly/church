<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="http://code.jquery.com/jquery-1.12.4.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<body>
		<div class="rows">
			<div class="col-md-2"><a href="<?php echo base_url('finance/givings/getMembers'); ?>" class="btn btn-primary">Back</a></div>
			<div class="col-md-10">
					<?php if ($this->session->flashdata('giving_msg')): 
										echo "<p class='alert alert-danger'>" . $this->session->flashdata('giving_msg') . "</p>";
								endif
					?>
					<span id="notifications"></span>
			</div>
		</div>
		
			<form action="#" method="post" id="givingsForm" class="form-horizontal">
				<div class="rows">
					<div class="col-md-12">
					<div class="col-md-5">
					<h3>Members Details</h3>
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
							<input type="text" value="<?php echo $members->FIRST_NAME;?>" name="text_fname" id="text_fname" readonly="true" class="form-control" required>
						</div>
					</div>
					<div class ="form-group">
						<label for="oname" class="class-md-2 text-right">Other Names</label>
						<div class="col-md-3">
							<input type="text" value="<?php echo $members->OTHER_NAMES;?>" name="text_oname" id="text_oname" readonly="true" class="form-control" required>
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
				</div>
				<div class="col-md-7">
          <h3>Add Offerings in KShs</h3>
					<div class ="form-group">
						<label for="cfname" class="class-md-2 text-right">Sabbath date</label>
						<div class="col-md-3">
							<input type="date" name="text_date" id="text_date" class="form-control text-right" required/>
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
							<input type="hidden" value="<?php echo $members->ID;?>" name="text_fk" id="text_user" readonly="true" class="form-control" required>
						</div>
					</div>


					<div class ="form-group">
						<label class="class-md-2 text-right"></label>
						<div class="col-md-3">
							<input type="submit" name="btnUpdate" id="contributionsSubmit" class="btn btn-primary" value="submit" >
						</div>
					</div>
				</div>
				</div>
		</div>
	</form>
			<script type="text/javascript" src="<?php echo base_url('assets/js/moment.js') ?>"></script>
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


					$( "#givingsForm" ).submit(function( e ) {
              e.preventDefault();
              let text_date = {'text_date': $('#text_date').val()};
              let text_user = {'text_user': $('#text_user').val()};
              let today = moment().format('MM/DD/YYYY');

              if ($today <= $('#text_user').val()){
	              $.ajax({
	              	url: '<?php echo base_url("finance/givings/checkRecord"); ?>',
	              	type: 'POST',
	              	data: {text_date, text_user},
	              	success: function (response) {
	              		response = JSON.parse(response);
	              		console.log(response);
	              		console.log(response.status);
	              		if (response.status == 1) {
	              			$("#text_date").css('border','solid 1px red');
	              			document.getElementById("notifications").innerHTML="<p class='alert alert-danger'>Record With that date already exists for " + $("#text_fname").val().toUpperCase() + " "+ "</p>";
	              		} else if (response.status == 0) {
	              			$.post('<?php echo base_url("finance/givings/submitRecord") ?>', $('form#givingsForm').serialize(), function (data) {
	                        location.reload();
	                    });
	              		}
	              	}
	              });
              }else{
              	$("#text_date").css('border','solid 1px red');
              }
          });

				});
			</script>
</body>
