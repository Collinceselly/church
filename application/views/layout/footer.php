

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

  $('#all_contributions_table').DataTable();
});
</script>
</body>
</html>