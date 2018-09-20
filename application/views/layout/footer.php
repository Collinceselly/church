
<script
  src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery-1.12.4.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.mask.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/chartist.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/moment.js') ?>"></script>

<script>
    $(document).ready(function () {

      let today = moment().format('MM/DD/YYYY');
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
  });
  </script>
</body>
</html>