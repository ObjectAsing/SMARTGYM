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
                  <div class="container-fluid">

                      <div class="title-page full">

            </div>
            <br>
            <br>
            <br>


            <!-- form -->
            <div class="search-box full">
                <form action="<?php echo base_url() ?>admin/report" method="get">
                    <div class="form left">
                        <div class="left">
                            <label for="" class="left form-label">Fill Year</label>
                        <?php if (isset($_GET['year'])): ?>
                            <input id="name" placeholder="<?php echo date('Y') ?>" value="<?php echo $_GET['year'] ?>"  name="year" type="text" class="form-input">
                        <?php else: ?>
                             <input id="name" type="text" class="form-input" name="year" placeholder="<?php echo date('Y') ?>">
                        <?php endif ?>
                        </div>
                    </div>

                    <div class="form left">
                        <div class="left">
                            <label for="" class="left form-label">Fill Month</label>
                            <?php if (isset($_GET['month'])): ?>
                            <input id="name" placeholder="<?php echo date('m') ?>" value="<?php echo $_GET['month'] ?>" name="month type="text" class="form-input">
                        <?php else: ?>
                             <input id="name" type="text" class="form-input" name="month" placeholder="<?php echo date('m') ?>">
                        <?php endif ?>

                        </div>
                    </div>

                    <div class="form left">
                        <div class="left">
                            <label for="" class="left form-label" style="opacity:0">-</label>
                            <input type="submit" value="Analyse" class="form-input">
                            <input TYPE="button" class="form-input" onClick="window.location.reload()" VALUE="Refresh Page">

                        </div>
                    </div>
                </form>
            </div>

            <div class="title-page full">
                <h2>Amount Percentage</h2>
            </div>

            <div class="percentage full">
                <?php if (empty($_GET['month']) && empty($_GET['year']) ): ?>
                    now you can find the data
                     <?php else: ?>
                <?php if ($PREMIUM == 0 && $vvip == 0 && $vip == 0): ?>
                    No Data for Selected Date
                <?php else: ?>
                  <label>Weight Training  :  </label>
              <!--  <label>Weight Training  :  <?php echo $PREMIUM ?>%</label> -->
                <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <!-- <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $PREMIUM*5 ?>%"> -->
                    WT 80%
                  <!--  WT <?php echo $PREMIUM ?>% -->

                  </div>
                </div>

              <!--  <label>Resort VIP  : <?php echo $vip ?></label>
                <div class="progress">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $vip*5 ?>%">
                    VIP <?php echo $vip ?>%
                  </div>
                </div> -->

                <label>Cardio Training  : </label>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $vvip*5 ?>%">
                <!--  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $vvip*5 ?>%"> -->
                  CT 20%
                    <!--CT <?php echo $vvip ?>%-->
                  </div>
                </div>

                <label>Resort Income Sales This Month <?php echo $_GET['month'] ?>/<?php echo $_GET['year'] ?> Is
                <strong class="clr-red"><u>RM <?php echo number_format($pendapatan,2, ".", ",") ?></u></strong>
                </label>

                <?php endif ?>

                <?php endif ?>
            </div>

        </div>
    </div>

  </div>


<?php
$this->load->view('admin/footer');
