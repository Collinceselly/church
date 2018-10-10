<?php
/**
 * Created by PhpStorm.
 * User: Daniel Mutwiri
 * Date: 08/10/18
 * Time: 15:38
 */

require_once __DIR__.'/../layout/header.php';
echo '<div class="container">';
$total = 0;
?>
<style>
	.modal {display:table;}
	/*.body {display:table-cell; vertical-align:middle; text-align:center;}*/
</style>

<div class="row">
<?php if ($this->session->flashdata('success_msg')) {?>
	<div class="alert alert-success">
		<?php echo $this->session->flashdata('success_msg'); ?>
	</div>
<?php } ?>

<?php if ($this->session->flashdata('report_missing')) {?>
	<div class="alert alert-danger">
		<?php echo $this->session->flashdata('report_missing'); ?>
	</div>
<?php } ?>

	<div class="col-lg-12 offset-lg-6">
		<p class="alert alert-danger col-lg-6 pull-left">Records for Quarter <?php echo $quarter; ?></p>

		<p class="pull-right" style="padding-right: 3px;">
			<button type="button" class="btn btn-danger btn-sm" id="bt_by_year">By Year</button>
		</p>

		<p class="pull-right" style="padding-right: 3px;">
			<button type="button" class="btn btn-warning btn-sm" id="bt_by_month">By Month</button>
		</p>

		<p class="pull-right" style="padding-right: 3px;">
			<button type="button" class="btn btn-info btn-sm" id="bt_by_sabath_date">By Date</button>
		</p>

		<p class="pull-right" style="padding-right: 3px;">
			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#filterQuarter" id="bt_by_quarter">Quarterly</button>
		</p>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="filterQuarter" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Filter By Quarter</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="<?php base_url('port/report/viewAllContributions')?>" method="post">
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label for="quarter">Select Quarter:</label>
								<select class="form-control" name="quarter_selection">
									<option value="first_quarter">First Quarter</option>
									<option value="second_quarter">Second Quarter</option>
									<option value="third_quarter">Third Quarter</option>
								</select>
							</div>
						</div>

						<button type="submit" class="btn btn-info">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<!-- search by Sabbath Date -->

	<div class="by_sabath_date">
		<?php $attributes = array('class' => 'form-inline', 'id' => 'sabbath_date_form');?>

		<?php echo form_open('port/report/viewAllContributions', $attributes); ?>
		<div class="form-group">
			<div class="form-group">
				<label for="date_sabbath" class="col-md-2 control-label">FROM: </label>&nbsp;&nbsp;
				<div class="input-group date form_date col-md-8" data-date="" data-date-format="dd MM yyyy" data-link-field="date_sabbath" data-link-format="yyyy-mm-dd">
					<input class="form-control" type="text" value="" name="date_sabbath">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
				<input type="hidden" id="date_sabbath" value="" name="date_sabbath"/><br/>
			</div>
		</div>
		<div class="form-group">
			<label for="date_sabbath2" class="col-md-2 control-label">TO:</label>
			<div class="input-group date form_date col-md-8" data-date="" data-date-format="dd MM yyyy" data-link-field="date_sabbath2" data-link-format="yyyy-mm-dd">
				<input class="form-control" type="text" value="" name="date_sabbath2">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
			<input type="hidden" id="date_sabbath2" value="" name="date_sabbath2" /><br/>
		</div>
		<input type="hidden" id="by_date"  name="by_date" value="by_date"/>
		<input type="hidden" id="by_date"  name="reporting" value="1"/>
		<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br>
		<?php echo form_close();?>
	</div>

	<!-- search by month and year -->
	<div class="by_month">
		<?php $attributes = array('class' => 'form-inline', 'id' => 'monthly_form');?>
		<?php echo form_open('port/report/viewAllContributions', $attributes); ?>
		<div class="form-group">
			<div class="form-group">
				<label for="date_monthly" class="col-md-2 control-label">FROM: </label>&nbsp;&nbsp;
				<div class="input-group date form_date_m col-md-8" data-date="" data-date-format="MM yyyy" data-link-field="date_monthly" data-link-format="mm-yyyy">
					<input class="form-control" type="text" value="" name="date_monthly">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
				<input type="hidden" id="date_monthly" value="" /><br/>
			</div>
		</div>
		<div class="form-group">
			<label for="date_monthly2" class="col-md-2 control-label">TO:</label>
			<div class="input-group date form_date_m col-md-8" data-date="" data-date-format="MM yyyy" data-link-field="date_monthly2" data-link-format="mm-yyyy">
				<input class="form-control" type="text" value="" name="date_monthly2">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
			<input type="hidden" id="date_monthly2" value="" name="date_monthly2"/><br/>
		</div>
		<input type="hidden" id="date_month" value="by_month" name="by_month"/>
		<input type="hidden" id="by_date"  name="reporting" value="1"/>
		<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br>
		<?php echo form_close();?>
	</div>


	<!-- search by Year -->
	<div class="by_year">
		<?php $attributes = array('class' => 'form-inline', 'id' => 'year_form');?>
		<?php echo form_open('port/report/viewAllContributions', $attributes); ?>
		<div class="form-group">
			<div class="form-group">
				<label for="date_yearly" class="col-md-2 control-label">FROM: </label>&nbsp;&nbsp;
				<div class="input-group date form_date_y col-md-8" data-date="" data-date-format="yyyy" data-link-field="date_yearly" data-link-format="yyyy">
					<input class="form-control" type="text" value="" name="date_yearly">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
				<input type="hidden" id="date_yearly" value="" name="date_yearly" /><br/>
			</div>
		</div>
		<div class="form-group">
			<label for="date_yearly2" class="col-md-2 control-label">TO:</label>
			<div class="input-group date form_date_y col-md-8" data-date="" data-date-format="yyyy" data-link-field="date_yearly2" data-link-format="yyyy">
				<input class="form-control" type="text" value="" name="date_yearly2">
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
			<input type="hidden" id="date_yearly2" value="" name="date_yearly2"/><br/>
		</div>
		<input type="hidden" id="date_year" value="by_year" name="by_year"/>
		<input type="hidden" id="by_date"  name="reporting" value="1"/>
		<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br>
		<?php echo form_close();?>
	</div>

<?php if (!empty($result)) { ?>
	<ul class="nav nav-pills">
		<li class="active"><a data-toggle="tab" href="#table">TABLE</a></li>
		<li><a data-toggle="tab" href="#chart">CHART</a></li>
	</ul>
	<div class="tab-content">
		<div id="table" class="tab-pane fade in active">
			<div class="row col-lg-12">
				<div class="col-lg-12">
					<table class="table table-condensed" id="all_contributions_table">
						<thead>
						<tr>
							<th>NAME</th>
							<th>RECORDING DATE</th>
							<th>TITHES</th>
							<th>COMBINED OFFERING</th>
							<th>CAMP OFFERING</th>
							<th>CHURCH BUILDING</th>
							<th>CONFERENCE</th>
							<th>LOCAL CHURCH</th>
							<th>STATION DEVELOPMENT</th>
							<th>TOTAL</th>
						</tr>
						</thead>
						<tbody>
						<?php if (isset($result)) {
							foreach ($result as $searchUsers) {
								$total += ($searchUsers->TITHES + $searchUsers->COMBINED_OFFERING +  $searchUsers->CAMP_OFFERING + $searchUsers->CHURCH_BUILDING + $searchUsers->CONFERENCE + $searchUsers->LOCAL_CHURCH + $searchUsers->STATION_DEVELOPMENT);
								?>
								<tr>
									<td><?php echo $searchUsers->NAME; ?></td>
									<td><?php echo Date($searchUsers->SABBATH_DATE);?></td>
									<td><?php echo number_format($searchUsers->TITHES, 2);?></td>
									<td><?php echo number_format($searchUsers->COMBINED_OFFERING, 2);?></td>
									<td><?php echo number_format($searchUsers->CAMP_OFFERING, 2);?></td>
									<td><?php echo number_format($searchUsers->CHURCH_BUILDING, 2);?></td>
									<td><?php echo number_format($searchUsers->CONFERENCE, 2);?></td>
									<td><?php echo number_format($searchUsers->LOCAL_CHURCH, 2);?></td>
									<td><?php echo number_format($searchUsers->STATION_DEVELOPMENT, 2);?></td>
									<td class="text-danger"><?php echo number_format($searchUsers->TITHES + $searchUsers->COMBINED_OFFERING +  $searchUsers->CAMP_OFFERING + $searchUsers->CHURCH_BUILDING + $searchUsers->CONFERENCE + $searchUsers->LOCAL_CHURCH + $searchUsers->STATION_DEVELOPMENT);?></td>
								</tr>
							<?php }
						}
						?>
						</tbody>
						<tfoot>
						<tr>
							<th>TOTAL</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th class="text-danger" style="font-size: 16px; font-weight: bold;"><?php echo $total;?></th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="chart">
			<div class="row ">
				<div class="col-lg-12">
					<div class="ct-chart ct-perfect-fourth"></div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


	<script>
		$(document).ready(function () {
			$("div.by_year").hide();
			$("div.by_month").hide();
			$("div.by_sabath_date").hide();
			$('.form_date').datetimepicker({
				language:  'en',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});

			$('.form_date_m').datetimepicker({
				format: "mm-yyyy",
				startView: "year",
				minView: "year"
			});

			$('.form_date_y').datetimepicker({
				format: "yyyy",
				startView: 'decade',
				minView: 'decade',
				viewSelect: 'decade',
				autoclose: true,
			});

			$("#bt_by_sabath_date").click(function(){
				$("div.by_sabath_date").show();
				$("div.by_month").hide();
				$("div.by_year").hide();
			});

			$("#bt_by_year").click(function(){
				$("div.by_sabath_date").hide();
				$("div.by_month").hide();
				$("div.by_year").show();
			});

			$("#bt_by_month").click(function(){
				$("div.by_sabath_date").hide();
				$("div.by_month").show();
				$("div.by_year").hide();
			});
		});
	</script>

<?php if (!empty($result)) { ?>
	<script type="text/javascript">
		$(document).ready(function () {
			let labels = [];
			let series = [];
			var memberStat = <?php echo json_encode($memberstat);?>;
			for(key in memberStat) {
				labels.push(key);
				series.push(memberStat[key]);
			}
			var data = {
				labels: labels,
				series: [
					series
				]
			};

			var options = {
				seriesBarDistance: 15,
				width: 1000,
				height: 500,
			};
			var responsiveOptions = [
				['screen and (min-width: 641px) and (max-width: 1024px)', {
					seriesBarDistance: 10,
					axisX: {
						labelInterpolationFnc: function (value) {
							return value;
						}
					}
				}],
				['screen and (max-width: 640px)', {
					seriesBarDistance: 5,
					axisX: {
						labelInterpolationFnc: function (value) {
							return value[0];
						}
					}
				}]
			];
			new Chartist.Bar('.ct-chart', data, options, responsiveOptions);
		});
	</script>

	<style type="text/css">
		.ct-series-a .ct-bar {
			/* Colour of your bars */
			stroke: rgb(124,252,0);
			/* The width of your bars */
			stroke-width: 100px;
		}

		.ct-label {
			font-size: 15px;
			color: rgb(30,144,255);
		}

	</style>
<?php } ?>

<?php require_once __DIR__.'/../layout/footer.php';?>
