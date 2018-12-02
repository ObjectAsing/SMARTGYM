<?php  $this->load->view('admin/header'); ?>

<html lang="en">
<head><


  <link rel="stylesheet" href="<?=base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>" />
  <link rel="stylesheet" href="<?=base_url('assets/plugins/simple-line-icons/css/simple-line-icons.css');?>" />
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/datepicker/datepicker3.css');?>">


  <!-- Main styles for this application -->
  <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
  <script src="<?=base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?=base_url('assets/plugins/popper.js/umd/popper.min.js');?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('assets/plugins/pace/pace.min.js');?>"></script>
    <script src="<?=base_url('assets/plugins/numeral/numeral.min.js');?>"></script>
    <!-- datepicker -->
    <script src="<?=base_url('assets/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
    <!-- Plugins and scripts required by all views -->

    <!-- CoreUI main scripts -->
    <script src="<?=base_url('assets/js/app.js');?>"></script>
    <script src="<?=base_url('assets/js/my.js');?>"></script>









  <!--
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/global.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
  <!--   <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/style.css">
  --  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/index/DataTables/media/css/jquery.dataTables.css">


   <script src="<?php echo base_url() ?>asset/index/js/jquery-2.1.4.js"></script>
  <script src="<?php echo base_url() ?>asset/index/js/jquery-ui.js"></script>
   <script src="<?php echo base_url() ?>asset/index/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>asset/index/js/jquery.datetimepicker.full.min.js"></script>
  <script src="<?php echo base_url() ?>asset/index/js/function.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/index/DataTables/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/index/DataTables/media/js/jquery.dataTables.min.js"></script>
-->


    <div class="container-fluid" style="border-top: 1px solid #D14B54; background: #f5f5f5f5">
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

            </div>

<div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-12 col-lg-12 mb-4">
            <div class="row">
                <div class="col-lg-3">
                    <?=form_label($form['first_period']['placeholder']);?>
                    <div class="input-group">
                        <?php
                            echo form_input($form['first_period']);
                            echo form_error('first_period','<div class="note">','</div>');
                        ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <?=form_label($form['first_period']['placeholder']);?>
                    <div class="input-group">
                        <?php
                            echo form_input($form['last_period']);
                            echo form_error('last_period','<div class="note">','</div>');
                        ?>
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-preview">
                                Show
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-success">
            <div class="card-body pb-0">
              <button type="button" class="btn btn-transparent p-0 float-right">
                <i class="fa fa-users"></i>
              </button>
              <h4 class="mb-0 employees">0</h4>
              <p>Member</p>
            </div>
            <div class="chart-wrapper px-3" style="height:70px;">
              <canvas id="LineEmployees" class="chart" height="70"></canvas>
            </div>
          </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-info">
            <div class="card-body pb-0">
              <button type="button" class="btn btn-transparent p-0 float-right">
                <i class="fa fa-male"></i>
              </button>
              <h4 class="mb-0 male-employees">0</h4>
              <p>Male Member</p>
            </div>
            <div class="chart-wrapper px-3" style="height:70px;">
              <canvas id="LineMaleEmployees" class="chart" height="70"></canvas>
            </div>
          </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-danger">
            <div class="card-body pb-0">
              <button type="button" class="btn btn-transparent p-0 float-right">
                <i class="fa fa-female"></i>
              </button>
              <h4 class="mb-0 female-employees">0</h4>
              <p>Female Member</p>
            </div>
            <div class="chart-wrapper px-3" style="height:70px;">
              <canvas id="LineFemaleEmployees" class="chart" height="70"></canvas>
            </div>
          </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-warning">
            <div class="card-body pb-0">
              <button type="button" class="btn btn-transparent p-0 float-right">
                <i class="fa fa-pie-chart"></i>
              </button>
              <h4 class="mb-0 male-female-employees">0</h4>
              <p>Male And Female Member</p>
            </div>
            <div class="chart-wrapper" style="height:70px;">
              <canvas id="LineMaleFemaleEmployees" class="chart" height="70"></canvas>
            </div>
          </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <i class="fa fa-sitemap"></i> Detail Member
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:250px;">
                            <canvas id="LineMaleFemaleMain" class="chart" height="250"></canvas>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:250px;">
                            <canvas id="LineGenderEmpDept" class="chart" height="250"></canvas>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:500px;">
                            <canvas id="PieEmpDept" class="chart" height="500"></canvas>
                          </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-7">
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:500px;">
                            <canvas id="RadarEmpDept" class="chart" height="500"></canvas>
                          </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-5">
                        <div class="col-lg-12">
                          <div class="chart-wrapper" style="height:500px;">
                            <canvas id="BarEmpDept" class="chart" height="500"></canvas>
                          </div>
                        -->
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </div>
        <!--/.col-->
        </div>
    </div>
    <!--/.row-->
</div>

<!-- ChartJS -->
<script src="<?=base_url('assets/plugins/chartjs/Chart.bundle.js');?>"></script>
<script src="<?=base_url('assets/plugins/chartjs/utils.js');?>"></script>
<script src="<?=base_url('assets/js/views/charts.js');?>"></script>
<script type="text/javascript">
    $(function () {
        getEmployees();
        $(".btn-preview").click(function(){
            getEmployees();
        });
    });
    // Employees Chart Start
    function getEmployees(){
        var first_period = $("#first_period").val();
        var last_period = $("#last_period").val();
        $.ajax({
            type: "POST",
            url: "<?=site_url('dashboard/getEmployees');?>",
            data: {"key":"paw!"
                    ,"first_period":first_period
                    ,"last_period":last_period},
            beforeSend: function(){
                $(".btn-preview").removeAttr("disabled");
            },
            success: function(resp){
                // Prepare Json data Start
                var obj = jQuery.parseJSON(resp);
                setEmp(obj);
                setMaleEmp(obj);
                setFemaleEmp(obj);
                setMaleFemaleEmp(obj);
                setMaleFemaleMain(obj);
                setEmpDept(obj);
                setGenderEmpDept(obj);
                setYearEmpDept(obj);
                setBarYearEmpDept(obj);
                $(".btn-preview").removeAttr("disabled");
            },
            error:function(event, textStatus, errorThrown) {
                $(".btn-preview").removeAttr("disabled");
                console.log("Error !", 'Error Message: ' + textStatus + ' , HTTP Error: ' + errorThrown, "error");
            }
      });
    }
    // Employees Chart End
</script>
