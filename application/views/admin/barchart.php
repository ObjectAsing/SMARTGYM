

  <?php $this->load->view('admin/header'); ?>

  <html lang="en">
  <head>
      <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/jquery.datetimepicker.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/global.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/index/DataTables/media/css/jquery.dataTables.css">

      <script src="<?php echo base_url() ?>asset/index/js/jquery-2.1.4.js"></script>
      <script src="<?php echo base_url() ?>asset/index/js/jquery-ui.js"></script>
      <script src="<?php echo base_url() ?>asset/index/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url() ?>asset/index/js/jquery.datetimepicker.full.min.js"></script>
      <script src="<?php echo base_url() ?>asset/index/js/function.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>asset/index/DataTables/media/js/jquery.dataTables.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>asset/index/DataTables/media/js/jquery.dataTables.min.js"></script>


      <script type="text/javascript">
      // Load the Visualization API and the line package.
      google.charts.load('current', {'packages':['bar']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        $.ajax({
        type: 'POST',
        url: 'http://localhost/gym-master_3/admin/getdata',

        success: function (data1) {
        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable();

      data.addColumn('string', 'Year');
      data.addColumn('number', 'Sales');
      data.addColumn('number', 'Expense');

      var jsonData = $.parseJSON(data1);

      for (var i = 0; i < jsonData.length; i++) {
            data.addRow([jsonData[i].year, parseInt(jsonData[i].sales), parseInt(jsonData[i].expense)]);
      }
      var options = {
        chart: {
          title: 'Company Performance',
          subtitle: 'Show Sales and Expense of Company'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }

      };
      var chart = new google.charts.Bar(document.getElementById('bar_chart'));
      chart.draw(data, options);
       }
     });
    }
  </script>
<style>
h1 {
   text-align: center;
}
</style>
 </head>



<body>

      <div class="container" style="border-top: 1px solid #D14B54; background: #f5f5f5f5">
          <div class="row">
              <div class="col-md-2 col-sm-2">
                  <?php $this->load->view('admin/sidebar'); ?>
              </div>
              <div class="col-md-10 col-sm-10">
                  <div class="ajaxResponse"><input type="hidden" name="ajaxResponse"></div>
                  <div class="row" style="padding: 0px 5px;">
                      <div class="col-md-10 ">
                          <br><h1 class="text-center">Report of Gym</h1>
                    <div class="container">






                        <div class="title-page full">
                          <div id="bar_chart"></div>

              </div>
              <br>
              <br>
              <br>




</body>
</html>
