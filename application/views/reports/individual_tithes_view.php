<?php
require_once __DIR__.'/../layout/header.php';
echo '<div class="container">';?>
<!-- <a href="<?php //echo base_url('clerk/searchV/index'); ?>" class="btn btn-primary">Back</a> -->
<?php $attributes = array('class' => 'form-inline', 'id' => 'myform');
$total = 0;
echo form_open('reports/individualTithesReport/viewTithes', $attributes); ?>
<div class="search1"><h3>Search by first name and sabbath date</h3>
<?php
if ($this->session->flashdata('success_msg')) {
?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
<?php
}
?>
<?php
if ($this->session->flashdata('report_missing')) {
?>
  <div class="alert alert-danger">
    <?php echo $this->session->flashdata('report_missing'); ?>
  </div>
<?php
}
?>
 <div class="form-group">
      <label for="date">DATE FROM:</label>
      <input type="date" id="date" name="date" class="form-control" placeholder="yyyy-mm-dd" required>
  </div>

  <div class="form-group">
      <label for="date">TO:</label>
      <input type="date" id="date2" name="date2" class="form-control" placeholder="yyyy-mm-dd" required>
  </div>
  <div class="form-group">
      <label for="user">Member Name:</label>
      <input type="user" class="form-control" id="user" placeholder="Enter Name of User" name="user" required="required">
  </div>
<input type="submit" name="btnSave" class="btn btn-primary" value="Search"><br>
</div>

<?php echo form_close();?>
<?php if (!empty($result)) {
?>

<ul class="nav nav-pills">
    <li class="active"><a data-toggle="tab" href="#table">TABLE</a></li>
    <li><a data-toggle="tab" href="#chart">CHART</a></li>
    
</ul>
<div class="tab-content">
  <div id="table" class="tab-pane fade in active">
    <div class="row col-lg-12">
      <div class="col-lg-12">
      <table class="table table-condensed">
          <thead>
            <tr>
              <th>Name</th>
              <th>Sabbath Date</th>
              <th>TOTAL</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (isset($result)) {
                foreach ($result as $searchUsers) {
                    $total += $searchUsers->TOTAL_AMOUNT;?>
                <tr>
                  <td><?php echo $searchUsers->NAME; ?></td>
                  <td><?php echo $searchUsers->SABBATH_DATE; ?></td>
                  <td><?php echo number_format($searchUsers->TITHES, 2);?></td>
                </tr>
                <?php
                }
            }
        ?>
          </tbody>
          <tfoot>
            <tr>
              <th>TOTAL</th>
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
<?php }?>

<?php require_once __DIR__.'/../layout/footer.php';?>

<script src="<?php echo base_url('js/tithesGraph.js') ?>"></script>

</div>
<script>
    $(document).ready(function () {
      //let today = moment().format('MM/DD/YYYY');
     let labels = [];
     let series = [];
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
    var memberStat = <?php echo json_encode($memberstat);?>;
    //var dataSource = $.parseJSON(memberStat);
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
