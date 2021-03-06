<!DOCTYPE html>
<html>
<head>
  <title>Church</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/chartist.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/buttons.dataTables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-datetimepicker.min.css')?>">

    <style type="text/css">
  .container{
    width: 1350px;
  }
  .search_button{
    margin-left: 1000px;
    margin-top: -20px;
  }
  .search1{
    text-align: center;
    color: #ffb3ff;
  }
  .gender{
    text-align: right;
    margin-right: 970px;
  }
  .R{
    text-align: center;
  }
  .h1{
    text-align: right;
    align-content: center;
    color: black;
    font-weight: 25px;
  }
  .logout{
    text-align: right;
    font-size: 15px;
    margin-right: 100px;
    margin-top: 5px;
  }
  body{
    background-color: #99ff99;
  }
  .modal {display:table;}

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
</head>
<body>
<?php
$total = 0;?>
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

<div class="h1"><h3>Treasurer <?php echo $this->session->userdata('FIRST_NAME')?></h3></div>
<div class="logout"><a href="<?php echo base_url('TemplateController/index')?>">LOGOUT</a></div>

<div class="col-lg-12 offset-lg-6">
   <p class="pull-right" style="padding-right: 3px;">
      <button type="button" class="btn btn-danger btn-sm" id="bt_by_year">By Year</button>
    </p>

    <p class="pull-right" style="padding-right: 3px;">
      <button type="button" class="btn btn-warning btn-sm" id="bt_by_month">By Month Range</button>
    </p>

    <p class="pull-right" style="padding-right: 3px;">
      <button type="button" class="btn btn-info btn-sm" id="bt_by_sabath_date">By Date Range</button>
    </p>
    <p class="pull-right" style="padding-right: 3px;">
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#filterQuarter" id="bt_by_quarter">Quarterly</button>
    </p>
</div>
     
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
          <form class="form-horizontal" action="<?php base_url('reports/individualTithesReport/viewTithes')?>" method="post">
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

             <div class="form-group">
              <label for="report">Report Type</label>
              <select class="form-control" name="report_type">
                <option value="tithes">TITHES</option>
                <option value="combined_offering">COMBINED OFFERING</option>
                <option value="church_building">CHURCH BUILDING</option>
                <option value="conference">CONFERENCE</option>
                <option value="local_church">LOCAL CHURCH</option>
                <option value="station_development">STATION DEVELOPMENT</option>
              </select>
            </div>
             <div class="form-group">
              <label for="user">Member Name:</label>
              <input type="text" class="form-control" id="user" placeholder="Enter Name of User" name="user" required="required">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
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

    <?php echo form_open('reports/individualTithesReport/viewTithes', $attributes); ?>
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
    <div class="form-group">
      <label for="report_type"></label>
      <select id="report_type" name="report_type" class="form-control" required="required">
        <option value="">--REPORT DATE--</option>
        <option value="tithes">TITHES</option>
        <option value="combined_offering">COMBINED OFFERING</option>
        <option value="church_building">CHURCH BUILDING</option>
        <option value="conference">CONFERENCE</option>
        <option value="local_church">LOCAL CHURCH</option>
        <option value="station_development">STATION DEVELOPMENT</option>
      </select>
    </div>
    <div class="form-group">
      <label for="user">Member Name:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter Name of User" name="user" required="required">
    </div>
    <input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br>
    <?php echo form_close();?>
</div>

<!-- search by month and year -->
<div class="by_month">
    <?php $attributes = array('class' => 'form-inline', 'id' => 'monthly_form');?>
    <?php echo form_open('reports/individualTithesReport/viewMonthly', $attributes); ?>
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

    <div class="form-group">
      <label for="report_type"></label>
      <select id="report_type" name="report_type" class="form-control" required="required">
        <option value="">--REPORT MONTHLY--</option>
        <option value="tithes">TITHES</option>
        <option value="combined_offering">COMBINED OFFERING</option>
        <option value="church_building">CHURCH BUILDING</option>
        <option value="conference">CONFERENCE</option>
        <option value="local_church">LOCAL CHURCH</option>
        <option value="station_development">STATION DEVELOPMENT</option>
      </select>
    </div>
    <div class="form-group">
      <label for="user">Member Name:</label>
      <input type="text" class="form-control" id="userm" placeholder="Enter Name of User" name="user" required="required">
    </div>
    <input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br>
    <?php echo form_close();?>
</div>


<!-- search by Year -->
<div class="by_year">
    <?php $attributes = array('class' => 'form-inline', 'id' => 'year_form');?>
    <?php echo form_open('reports/individualTithesReport/viewYearly', $attributes); ?>
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

    <div class="form-group">
      <label for="report_type"></label>
      <select id="report_type" name="report_type" class="form-control" required="required">
        <option value="">--REPORT YEARLY--</option>
        <option value="tithes">TITHES</option>
        <option value="combined_offering">COMBINED OFFERING</option>
        <option value="church_building">CHURCH BUILDING</option>
        <option value="conference">CONFERENCE</option>
        <option value="local_church">LOCAL CHURCH</option>
        <option value="station_development">STATION DEVELOPMENT</option>
      </select>
    </div>
    <div class="form-group">
      <label for="user">Member Name:</label>
      <input type="text" class="form-control" id="usery" placeholder="Enter Name of User" name="user" required="required">
    </div>
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
                <th>CONTRIBUTION TYPE</th>
                <th>TOTAL</th>
              </tr>
            </thead>
            <tbody>
                <?php if (isset($result)) {
                    foreach ($result as $searchUsers) {
                        $total += $searchUsers->$contribution_type;?>
                    <tr>
                      <td><?php echo $searchUsers->NAME; ?></td>
                      <td><?php echo Date($searchUsers->SABBATH_DATE);?></td>
                      <td><?php echo str_replace("_", " ", $contribution_type); ?></td>
                      <td><?php echo number_format($searchUsers->$contribution_type, 2);?></td>
                    </tr>
                    <?php }
                } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th class="text-danger" style="font-size: 16px; font-weight: bold;"><?php echo number_format($total, 2);?></th>
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

<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery-1.12.4.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.mask.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/chartist.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/moment.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap-datetimepicker.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.buttons.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/buttons.flash.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jszip.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/pdfmake.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/vfs_fonts.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/buttons.html5.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/buttons.print.min.js')?>"></script>

<script>
    $(document).ready(function () {
      $("div.by_year").hide();
      $("div.by_month").hide();
      $("div.by_sabath_date").show();
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

      var srvRqst = $.ajax({
        url: '<?php echo base_url("reports/individualTithesReport/getAllMembers");?>',
        data: {},
        type: 'post',
        datatype: 'json'
      });
      srvRqst.done(function (response) {
          var dataSource = $.parseJSON(response);
          console.log(dataSource);
          $("#user").autocomplete({
            source: dataSource
          });
        });

      $("#bt_by_sabath_date").click(function(){
          $("div.by_sabath_date").show();
          $("div.by_month").hide();
          $("div.by_year").hide();

          var srvRqst = $.ajax({
          url: '<?php echo base_url("reports/individualTithesReport/getAllMembers");?>',
          data: {},
          type: 'post',
          datatype: 'json'
        });
        srvRqst.done(function (response) {
          var dataSource = $.parseJSON(response);
          console.log(dataSource);
          $("#user").autocomplete({
            source: dataSource
          });
        });
      });

      $("#bt_by_year").click(function(){
          $("div.by_sabath_date").hide();
          $("div.by_month").hide();
          $("div.by_year").show();

          var srvRqst = $.ajax({
          url: '<?php echo base_url("reports/individualTithesReport/getAllMembers");?>',
          data: {},
          type: 'post',
          datatype: 'json'
        });
        srvRqst.done(function (response) {
          var dataSource = $.parseJSON(response);
          //console.log(dataSource);
          $("#usery").autocomplete({
            source: dataSource
          });
        });
      });

    $("#bt_by_month").click(function(){
        $("div.by_sabath_date").hide();
        $("div.by_month").show();
        $("div.by_year").hide();

        var srvRqst = $.ajax({
          url: '<?php echo base_url("reports/individualTithesReport/getAllMembers");?>',
          data: {},
          type: 'post',
          datatype: 'json'
        });
        srvRqst.done(function (response) {
          var dataSource = $.parseJSON(response);
          
          $("#userm").autocomplete({
            source: dataSource
          });
        });

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

  <script type="text/javascript">
  $(document).ready(function () {
  let srvRqst = $.ajax({
          url: '<?php echo base_url("reports/individualTithesReport/getAllMembers");?>',
          data: {},
          type: 'post',
          datatype: 'json'
      });
      srvRqst.done(function (response) {
          var dataSource = $.parseJSON(response);

          $("#user").autocomplete({
              source: dataSource
          });
      });

  $('#all_contributions_table').DataTable({
      dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});  
</script>
<?php } ?>
</body>
</html>

